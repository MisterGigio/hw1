# Pitchfork Website Clone

Questo progetto è un clone del sito web **Pitchfork**, uno dei principali portali di recensioni musicali e notizie legate al mondo della musica.  
Il sito è stato realizzato utilizzando **HTML**, **CSS**, **JavaScript** e **PHP**, ed è progettato per riflettere il layout e lo stile del sito ufficiale di Pitchfork (https://pitchfork.com/).

---

## Descrizione

Il sito web include:

- Una **navbar** di navigazione con link a sezioni come **News**, **Reviews**, **Best New Music**, e altro;
- Una **sezione centrale** che mostra articoli con **immagini** e **descrizioni**;
- Una **sezione laterale** con notizie e articoli secondari;
- Un **footer** con informazioni legali, collegamenti ai social media e risorse aggiuntive.

---

## Funzionalità

- **Header di navigazione** con menù a scomparsa, logo, link alle sezioni principali, pulsante per newsletter e login/registrazione;
- **Contenuto principale**: mostra notizie principali con immagini grandi e articoli secondari (autore, data, estratto);
- **Sezione laterale**: articoli secondari in formato semplificato;
- **Footer**: include link legali, social;
- Integrazione di **PHP lato server** per la gestione del login, il recupero dati dal database e l'esposizione di API REST;
- Utilizzo combinato di **JavaScript e PHP** per effettuare **richieste asincrone** ai dati (API) con controllo sia **lato client** che **lato server**.

---

## Tecnologie utilizzate

- **HTML**: struttura e markup della pagina;
- **CSS**: stile, layout e responsività del sito;
- **JavaScript**:
  - Creazione del **menù** per la navigazione mobile;
  - Visualizzazione dinamica di una lista di immagini con **sezione, titolo, paragrafo e data**;
  - **Chiamate asincrone (AJAX)** a endpoint PHP per recuperare dati dal database;
- **PHP**:
  - Creazione di **API REST** per la gestione dei dati utente e dei contenuti dinamici;
  - **Connessione al database MySQL** e gestione delle richieste del client in modo sicuro.

---

### API utilizzate

- **Spotify API**: permette di cercare una **band o artista** e visualizzare tutti i **suoi album**;
- **NewsAPI**: consente di cercare **notizie musicali** legate a una **parola chiave** e ottenere risultati rilevanti.

---

## Layout e stile

- **Flexbox**: per il posizionamento e l’allineamento degli elementi;
- **Media Queries**: per rendere il sito responsive su dispositivi mobili;
- **Immagini e Media**: le immagini di esempio sono tratte dal sito originale Pitchfork per simulare fedelmente il design.
