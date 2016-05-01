<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

  <!--Jquery Import-->
  <script src="//code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

  <!-- Material Design Lite-->
  <script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
  <script src="//cdn.ckeditor.com/4.5.1/basic/ckeditor.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"></head>
<h2>Notes</h2>
  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" id="newNote">New Note</button>
  <br/>
  <form style="display: none;" name="notesForm" id="notesForm">
    <div class="mdl-textfield mdl-js-textfield">

      <label class="mdl-textfield__label" for="pastorName"><h5>Title</h5></label>
      <input class="mdl-textfield__input" type="text" name="pastorName" id="pastorName" />
    </div>
    <br/>
    <div class="mdl-textfield mdl-js-textfield">
      <textarea class="mdl-textfield__input" name="notes" rows="7" id="notes"></textarea>
    </div>
  </form>
  <br/>
  <button style="display: none;" class="mdl-button mdl-js-button mdl-button--primary btn btn-primary" id="button">
    Add
  </button>
  <br/>
  <div class="list"></div>
  <script>
    var ckEditorID;

ckEditorID = 'notes';

function fnConsolePrint() {
  //console.log($('#' + ckEditorID).val());
  console.log(CKEDITOR.instances[ckEditorID].getData());
}
CKEDITOR.config.forcePasteAsPlainText = true;
CKEDITOR.replace(ckEditorID, {
  toolbar: [{
    items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat']
  }, {
    items: ['Format']
  }, {
    items: ['Link', 'Unlink']
  }, {
    items: ['Indent', 'Outdent', '-', 'BulletedList', 'NumberedList']
  }, {
    items: ['Undo', 'Redo']
  }]
})
$(document).ready(function() {
  var $newNote = $("#newNote");
  var $notesForm = $("#notesForm");
  var $button = $("#button");
  var $list = $(".list");
  var $pastorName = $('input[name=pastorName]');

  var toggleEl = function($el, direction, callback) {
    if (direction == "show") {
      $el.show("fast", function() {
        if (callback !== undefined) {
          callback();
        }
      });
    } else {
      $el.hide("fast", function() {
        if (callback !== undefined) {
          callback();
        }
      });
    }
  }

  var appendListItem = function(name, date, notes) {
    $list.append('<div class="item">' + name + '<br/>' + date + '<br/>' + notes + '<br/><button type="button" class="mdl-button mdl-js-button mdl-button--accent" id="delete">Delete</button>' + '</div>');
  }

  var saveToLocalStorage = function(name, date, notes) {
    if (localStorage.getItem("church_notes") === null) {
      localStorage.setItem("church_notes", JSON.stringify([]));
    }
    var data = JSON.parse(localStorage.getItem("church_notes"));
    var newNoteJSON = {
      name: name,
      date: date,
      notes: notes
    };
    data.push(newNoteJSON);
    localStorage.setItem("church_notes", JSON.stringify(data));
  }

  var retrieveFromLocalStorage = function() {
    if (localStorage.getItem("church_notes") !== null) {
      var data = JSON.parse(localStorage.getItem("church_notes"));
      for (i = 0, len = data.length; i < len; i++) {
        appendListItem(data[i].name, data[i].date, data[i].notes);
      }
    }
  }

  var appendNewNote = function(callback) {
    if ($pastorName.val() != "") {
      var pastorName = $pastorName.val();
      var notes = CKEDITOR.instances.notes.getData();
      var dt = new Date();
      var date = dt.toDateString();
      appendListItem(pastorName, date, notes);
      callback();
      $pastorName.val("");
      CKEDITOR.instances.notes.setData("");
      saveToLocalStorage(pastorName, date, notes);
    } else {
      alert("Note can't be blank.");
    }
  }

  retrieveFromLocalStorage();

  $newNote.on("click", function() {
    toggleEl($notesForm, "show", function() {
      toggleEl($newNote, "hide");
      toggleEl($button, "show");
    });
  });

  $button.on("click", function() {
    appendNewNote(function() {
      toggleEl($newNote, "show");
      toggleEl($notesForm, "hide");
      toggleEl($button, "hide");
    });
  });

  $(document).on('click', '#delete', function() {
    var $item = $(this).closest(".item");
    toggleEl($item, "hide", function() {
      $item.remove();
    });
  });
});
  </script>