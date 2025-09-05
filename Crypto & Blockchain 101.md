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
* Full nodes store everything, which requires over 500 GB of disk space as of 2024. Pruned nodes store recent data only, significantly reducing storage requirements.

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

## 🔗 Blockchain Layers (L0 to L3)

Blockchains are often discussed in terms of "layers," which describe their architecture and how they scale. This layered model helps explain how different protocols and applications interact.

*   **Layer 0 (L0): The Foundation**
    *   This is the underlying infrastructure that allows different blockchains to communicate. It consists of the internet, hardware, and protocols that enable interoperability.
    *   **Examples**: Protocols like Polkadot and Cosmos are often considered Layer 0 because they provide a framework for building and connecting independent Layer 1 blockchains.

*   **Layer 1 (L1): The Core Blockchain**
    *   This is the base blockchain network, like Bitcoin or Ethereum. It is responsible for its own security and the final settlement of all its transactions.
    *   **Challenge**: L1s often face a "scalability trilemma," struggling to balance decentralization, security, and speed.

*   **Layer 2 (L2): The Scaling Solution**
    *   L2s are protocols built *on top of* a Layer 1 blockchain. They handle transactions off the main L1 chain, allowing them to be processed much faster and at a lower cost.
    *   They periodically bundle transactions and submit a compressed summary back to the Layer 1 chain, inheriting its robust security.

*   **Layer 3 (L3): The Application Layer**
    *   This is where user-facing decentralized applications (dApps) and protocols are built. These applications run on top of Layer 1 or Layer 2 networks to provide specific services.
    *   **Examples**: Decentralized exchanges like Uniswap, lending protocols like Aave, or blockchain games.

### Main Chains & Layers Overview

| Chain / Protocol     | Layer | Consensus             | Live Nodes (Approx.) | Description                                                 |
| :------------------- | :---: | :-------------------- | :------------------: | :---------------------------------------------------------- |
| **Polkadot**         |  L0   | Nominated PoS (NPoS)  |       ~1,000+        | An interoperability protocol for connecting different blockchains. |
| **Bitcoin**          |  L1   | Proof-of-Work (PoW)   |      ~17,000+        | The original decentralized cryptocurrency and settlement layer. |
| ⚡️ Lightning Network |  L2   | - (Off-chain network) |      ~15,000+        | A payment protocol on Bitcoin for fast, cheap transactions. |
| **Ethereum**         |  L1   | Proof-of-Stake (PoS)  |       ~9,000+        | A decentralized platform for smart contracts and dApps.     |
| **Arbitrum One**     |  L2   | - (Optimistic Rollup) |       ~1,500+        | An L2 solution that scales Ethereum by bundling transactions. |
| **Uniswap**          |  L3   | - (dApp on Ethereum)  |          -           | A decentralized exchange (dApp) running on Ethereum and L2s. |
| **Solana**           |  L1   | Proof-of-History (PoH)|       ~1,600+        | A high-performance blockchain focused on speed and low cost.  |

---

## 📈 Staking vs. Lending

### What is Staking?

Staking is the process of actively participating in transaction validation on a proof-of-stake (PoS) blockchain. On these blockchains, anyone with a minimum-required balance of a specific cryptocurrency can validate transactions and earn staking rewards.

*   **Validators**: When you stake your coins, you become a **validator**. Validators are responsible for the same thing as miners in a proof-of-work chain: ordering transactions and creating new blocks so that all participants on the network can agree on the state of the blockchain. Validators are chosen at random to create blocks and are rewarded for doing so. If they act maliciously (e.g., validate fraudulent transactions), they can lose a portion of their staked coins in an event called **slashing**.
*   **Purpose**: Staking serves to secure the network. The staked crypto acts as a guarantee of the validator's legitimacy.

### What is Lending?

Crypto lending involves lending your cryptocurrencies to borrowers in return for interest payments. The loans are often facilitated by centralized platforms or decentralized finance (DeFi) protocols. Unlike staking, lending does not directly contribute to the security of a blockchain network.

### What does APY mean?

**APY** stands for **Annual Percentage Yield**. It is the real rate of return earned on an investment, taking into account the effect of compounding interest. In the context of crypto exchanges and DeFi platforms, APY is the projected rate of annual return on a particular staking or lending product.

| Feature          | Staking                                      | Lending                                       |
| ---------------- | -------------------------------------------- | --------------------------------------------- |
| **Purpose**      | Secure the network, validate transactions    | Earn interest by lending assets to borrowers  |
| **Mechanism**    | Locking up coins to become a validator (PoS) | Depositing crypto into a lending pool/platform|
| **Rewards**      | Block rewards and transaction fees           | Interest paid by borrowers                    |
| **Risk**         | Slashing penalties, network volatility       | Smart contract bugs, platform risk, defaults  |
| **Who you trust**| The blockchain protocol itself               | The lending platform or DeFi protocol         |

---

## 📖 Learn More

* [Mempool.space (block explorer)](https://mempool.space/)
* [Bitcoin Core Code](https://github.com/bitcoin/bitcoin)
* [Blockstream Explorer](https://blockstream.info/)
