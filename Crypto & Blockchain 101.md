# 🪙 Crypto 101: Bitcoin Fundamentals & Blockchain Concepts

## 🔐 Keys & Wallets

### ✔️ Private Key vs Public Key

* **Private Key**: A secret (usually 256-bit number) that allows you to sign transactions and spend BTC.

  * Example: `L1aW4aubDFB7yfras2S1mN3bqg9w7y5cbL1ddg8iE3rKPrJfL9SC`
* **Public Key**: Derived from the private key, used to generate your Bitcoin address.

  * Example: `03a34f3c00ec1985c5e0c2edacdf7e9849f3dd81d1962cb2b5cdcb9d2d2a72251f`

### 🌐 Wallet Types

* **Hardware Wallets** (e.g., Trezor): Store your private key in a secure chip. The PIN unlocks the chip temporarily to sign transactions.
* **Software Wallets** (e.g., Exodus): Interface with external nodes. Your private key is encrypted and stored locally or derived from a seed phrase.

---

## 🧱 Bitcoin Transactions

### UTXO (Unspent Transaction Output) Model

* Each transaction consumes previous UTXOs as inputs and creates new UTXOs as outputs.
* Example:

```json
{
  "inputs": [
    {
      "txid": "abcd123...",
      "vout": 0,
      "coinbase": false
    }
  ],
  "outputs": [
    {
      "value": 0.005,
      "address": "1CoffeeReceiverAddress..."
    },
    {
      "value": 0.095,
      "address": "1ChangeBackToSender..."
    }
  ]
}
```

### Fees

* Calculated as: `inputs total - outputs total`
* Fee goes to miners. Example: Input = 0.1 BTC, Output = 0.099 BTC → Fee = 0.001 BTC

---

## ⚒️ Mining & Coinbase Transactions

### Block Reward Components

* **Subsidy**: New BTC created (was 50 BTC in 2009, now 3.125 BTC as of 2024).
* **Fees**: Sum of all transaction fees in the block.
* Example Block Reward: 3.125 BTC subsidy + 0.9 BTC fees = **4.025 BTC total**

### Coinbase Input

* First transaction in a block. Creates new BTC.

```json
{
  "inputs": [
    {
      "coinbase": "03a2...",
      "sequence": 4294967295
    }
  ]
}
```

* Not related to **Coinbase (the company)**.

---

## 🖥️ Nodes & the Network

### Types of Bitcoin Nodes

| Type         | Description                                  | Storage |
| ------------ | -------------------------------------------- | ------- |
| Full Node    | Stores full blockchain + verifies everything | 500+ GB |
| Pruned Node  | Deletes old blocks, keeps UTXO set           | 5–10 GB |
| Light Wallet | Uses external full nodes (SPV)               | Minimal |

### Node Discovery & Trust

* Wallets like Exodus use **trusted public nodes** (e.g., Blockstream, Mempool.space, Electrum servers).

---

## 🛡️ Security & Governance

### Code Upgrades

* Bitcoin is open source: anyone can propose changes on [GitHub](https://github.com/bitcoin/bitcoin).
* Maintainers review PRs; changes only activate if **node operators upgrade**.

### Forks = Protection Mechanism

| Type      | Description                         | Example         |
| --------- | ----------------------------------- | --------------- |
| Soft Fork | Backward compatible                 | SegWit, Taproot |
| Hard Fork | Breaks compatibility, creates split | Bitcoin Cash    |

If malicious code is proposed, honest nodes can **refuse to upgrade** and **fork the chain**.

---

## 💰 Block Rewards & Halving

### Reward History

| Year | Reward (BTC) | Approx Price | Total Value |
| ---- | ------------ | ------------ | ----------- |
| 2009 | 50 BTC       | \~\$0.0009   | \~\$0.045   |
| 2012 | 25 BTC       | \~\$12       | \~\$300     |
| 2016 | 12.5 BTC     | \~\$650      | \~\$8,125   |
| 2020 | 6.25 BTC     | \~\$9,000    | \~\$56,250  |
| 2024 | 3.125 BTC    | \~\$65,000   | \~\$203,125 |

### Future of Mining

* After 21M BTC are mined (\~2140), miners earn **only transaction fees**.
* Network relies on fee market and Layer 2 solutions for efficiency.

---

## ⚡️ Lightning Network (Layer 2)

* Open a payment channel by locking BTC.
* Send fast, cheap transactions off-chain.
* Only opening/closing hits the main chain.
* Perfect for micro-transactions (coffee, tips, etc).

---

## 🔒 Locking BTC vs Staking

| Feature      | Lightning (BTC)       | Staking (PoS coins like ETH) |
| ------------ | --------------------- | ---------------------------- |
| Purpose      | Fast payments         | Network security             |
| Reward       | Optional routing fees | Block rewards + fees         |
| Risk         | Channel loss          | Slashing                     |
| Chain Impact | Off-chain (Layer 2)   | On-chain                     |

---

## 🗂️ Bitcoin Data Storage

* **Blockchain**: Immutable history of all blocks/transactions.
* **UTXO Set**: Current spendable outputs — updated by each block.
* Full nodes store everything; pruned nodes store recent data only.

---

## 🕵️️ Satoshi Nakamoto

* Published Bitcoin whitepaper in 2008.
* Disappeared in 2011 after saying "I've moved on to other things."
* Never spent his 1M+ BTC.

### Notable Links

* [Bitcoin Whitepaper](https://bitcoin.org/bitcoin.pdf)
* [Satoshi's Emails & Posts](https://satoshi.nakamotoinstitute.org/)
* [First Forum Post](https://bitcointalk.org/index.php?topic=5.msg5#msg5)

---

## 📖 Learn More

* [Mempool.space (block explorer)](https://mempool.space/)
* [Bitcoin Core Code](https://github.com/bitcoin/bitcoin)
* [Blockstream Explorer](https://blockstream.info/)
