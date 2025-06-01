# CoreManage

**CoreManage** ist eine moderne Laravel-basierte Plattform zur Verwaltung von Anwendungen, Serverdaten, Deployments und Updates. Die Applikation richtet sich an IT-Teams, Systemadministratoren und Entwickler, die eine zentrale, dockerisierte Verwaltungslösung mit integrierter Datenbankanbindung, REST-Schnittstellen und Benutzeroberfläche benötigen.

## ⚙️ Versionen

| Komponente         | Version        |
|--------------------|----------------|
| Laravel Framework  | 10.28.0        |
| DDEV               | v1.22.3        |
| PHP                | 8.1            |
| Node.js            | 18             |
| MariaDB            | 10.4           |
| Docker-Plattform   | docker-desktop |
| Router             | Traefik        |

---

## 🛠️ Entwicklungsumgebung

| Attribut                | Wert                                    |
|-------------------------|-----------------------------------------|
| Projektpfad             | `~/Software/CoreManage`                 |
| URL                     | http://coremanage.ddev.site             |
| phpMyAdmin              | http://coremanage.ddev.site:8037        |
| Mailpit                 | http://coremanage.ddev.site:8026        |
| Verbindungstyp Datenbank| PDO                                     |

---

## 🚀 Einrichtung

```bash
# Projekt starten
cd ~/Software/CoreManage
ddev start

# Abhängigkeiten installieren
composer install

# Umgebungsdatei kopieren
cp .env.example .env

# App Key generieren
php artisan key:generate

# Datenbanktabellen erzeugen
php artisan migrate

**Branch:** `newFunction`

### Versionen
- **Laravel Framework:** 10.28.0
- **ddev:** v1.22.3

### Befehle
Um die Laravel-Version abzurufen:
```bash
ddev artisan --version

## Dokumentation

### Allgemeine Informationen

| Attribut               | Wert                                               |
|------------------------|----------------------------------------------------|
| **Laravel-Version**    | `10.22.0`                                          |
| **Entwicklungsumgebung**| `DDEV`                                             |
| **Projektpfad**        | `~/Softwer/laravel115`                             |
| **URL**                | [http://laravel115.ddev.site](http://laravel115.ddev.site)  |
| **Docker-Plattform**   | `docker-desktop`                                   |
| **Router**             | `traefik`                                          |

### Dienste:

| Dienst     | Status | URL/InDocker                     | Zusätzliche Informationen               |
|------------|--------|----------------------------------|----------------------------------------|
| **Web**    | OK     | [https://laravel115.ddev.site](https://laravel115.ddev.site)  | PHP 8.1, nginx-fpm, Docroot: `public`, NodeJS: `18`  |
| **Datenbank (db)** | OK | InDocker: `db:3306`              | mariadb:10.4, Benutzer: `db/db` or `root/root`  |
| **phpMyAdmin** | OK | [https://laravel115.ddev.site:8037](https://laravel115.ddev.site:8037) | -  |
| **Mailpit**  | -    | [https://laravel115.ddev.site:8026](https://laravel115.ddev.site:8026)  | Zum Öffnen von Mailpit verwenden Sie: `ddev launch -m` |

### Datenbank

## Datenbankverbindung

- **Verbindungstyp**: PDO

### Attribute:

- **CASE**: NATURAL
- **Fehlermodus**: EXCEPTION
- **AUTOCOMMIT**: Aktiviert (1)
- **PERSISTENT**: Nicht aktiviert (false)
- **Treibername**: mysql

### Serverinformationen:

- **Laufzeit**: 6287 Sekunden
- **Threads**: 9
- **Fragen**: 1116
- **Langsame Abfragen**: 0
- **Öffnungen**: 37
- **Tabellen-Flushes**: 1
- **Geöffnete Tabellen**: 30
- **Abfragen pro Sekunde (Durchschnitt)**: 0.177

### Weitere Attribute:

- **ORACLE_NULLS**: NATURAL
- **Client-Version**: mysqlnd 8.1.22
- **Server-Version**: 10.4.31-MariaDB-1:10.4.31+maria~ubu2004-log
- **STATEMENT_CLASS**: PDOStatement
- **EMULATE_PREPARES**: Nicht aktiviert (0)



#### Migrationen

| Migration |
|------------|

| Datum       | Uhrzeit  | Migration-Name                                        | Batch | Status |
|-------------|----------|-------------------------------------------------------|-------|--------|
| 2014-10-12  | 00:00:00 | `create_users_table`                                  | [1]   | Ran    |
| 2014-10-12  | 10:00:00 | `create_password_reset_tokens_table`                  | [1]   | Ran    |
| 2019-08-19  | 00:00:00 | `create_failed_jobs_table`                            | [1]   | Ran    |
| 2019-12-14  | 00:00:01 | `create_personal_access_tokens_table`                 | [1]   | Ran    |
| 2023-08-29  | 09:10:19 | `create_servers_table`                               | [1]   | Ran    |
| 2023-08-29  | 09:10:20 | `create_docker_containers_table`                      | [1]   | Ran    |
| 2023-08-29  | 09:10:22 | `create_histories_table`                              | [1]   | Ran    |
| 2023-09-07  | 12:11:01 | `create_flights_table`                                | [1]   | Ran    |
| 2023-09-11  | 09:10:23 | `create_histories_v2_table`                           | [1]   | Ran    |
| 2023-09-11  | 09:10:24 | `create_histories_v3_table`                           | [1]   | Ran    |
| 2023-09-11  | 12:58:55 | `create_application_A_table`                          | [1]   | Ran    |
| 2023-09-11  | 12:58:56 | `create_application_B_table`                          | [1]   | Ran    |
| 2023-09-11  | 12:58:56 | `create_application_C_table`                          | [1]   | Ran    |
| 2023-09-21  | 13:15:08 | `applications`                                        | [1]   | Ran    |
| 2023-10-23  | 13:51:27 | `create_projekrusta_table`                            | [1]   | Ran    |
| 2023-10-24  | 20:28:49 | `add_data_column_to_projekrusta`                      | [2]   | Ran    |




### Entwicklungsumgebung

| Attribut | Wert |
|----------|------|
| Tool | DDEV |
| Beschreibung | DDEV ist ein OS-unabhängiges, Docker-basiertes Tool für PHP-Entwicklungsumgebungen. |

### Anweisungen zur Einrichtung

| Schritt | Anweisung |
|---------|-----------|
| 1 | Klone das Repository auf Ihren lokalen Rechner. |
| 2 | Navigieren Sie in das Projektverzeichnis und führen Sie `ddev start` aus. |
| 3 | Installieren Sie die PHP-Pakete mit `composer install`. |
| 4 | Initialisieren Sie die Datenbank mit `php artisan migrate`. |


### Routen

| Methode | Pfad                               | Aktion                                                                   | Name                              |
|---------|------------------------------------|--------------------------------------------------------------------------|-----------------------------------|
| GET, HEAD | `/`                                  | -                                                                        | -                                 |
| POST     | `_ignition/execute-solution`       | `ignition.executeSolution › Spatie\LaravelIgnition › ExecuteSolutionController`  | -                                 |
| GET, HEAD | `_ignition/health-check`          | `ignition.healthCheck › Spatie\LaravelIgnition › HealthCheckController` | -                                 |
| POST     | `_ignition/update-config`          | `ignition.updateConfig › Spatie\LaravelIgnition › UpdateConfigController`   | -                                 |
| GET, HEAD | `api/user`                         | -                                                                        | -                                 |
| GET, HEAD | `dashboard`                        | -                                                                        | `dashboard`                       |
| GET, HEAD | `login`                            | `LoginController@showLoginForm`                                          | `login`                           |
| POST     | `login`                            | `LoginController@login`                                                   | -                                 |
| POST     | `logout`                           | `LoginController@logout`                                                 | `logout`                          |
| POST     | `projektrusta`                     | `ProjektrustAController@store`                                           | `projektrusta.store`              |
| GET, HEAD | `projektrusta`                     | `ProjektrustAController@index`                                           | `projektrusta.index`              |
| GET, HEAD | `projektrusta/create`              | `ProjektrustAController@create`                                          | `projektrusta.create`             |
| POST     | `rust-data`                        | `RustDataController@store`                                               | -                                 |
| GET, HEAD | `rust-data`                        | `RustDataController@index`                                               | -                                 |
| DELETE   | `rust-data/{id}`                   | `RustDataController@destroy`                                             | -                                 |
| GET, HEAD | `sanctum/csrf-cookie`              | `Laravel\Sanctum › CsrfCookieController@show`                            | `sanctum.csrf-cookie`             |
| GET, HEAD | `server`                           | `ServerController@index`                                                | `server`                          |
| POST     | `servers`                          | `ServerController@store`                                                | `servers.store`                   |
| GET, HEAD | `servers/create`                   | `ServerController@create`                                               | `servers.create`                  |
| GET, HEAD | `servers/{id}`                    | `ServerController@show`                                                 | `servers.show`                    |
| DELETE   | `servers/{id}`                     | `ServerController@destroy`                                              | `servers.destroy`                 |
| GET, HEAD | `test-env`                         | -                                                                        | -                                 |
| POST     | `update`                           | `UpdateController@index`                                                | `update.index`                    |
| POST     | `update-application`               | `UpdateController@updateApplication`                                     | -                                 |
| POST     | `update-application-database`      | `UpdateController@updateApplicationInDatabase`                          | `update.database`                 |


---

**Vorgang:** Starten von ddev

- Initialisierung und Konfiguration
    - Setzen von diversen Variablen und Umgebungsparametern
    - Einstellen von PHP 8.1 und Nginx-FPM als Webserver
    - Konfiguration der Webservereinstellungen basierend auf dem Projekttyp (in diesem Fall Laravel)
    - Aktivierung von Apache-Modulen und Konfigurationen
    - Deaktivierung von xdebug
    - Einrichtung von globalen Cache-Verzeichnissen

- SSL-Zertifikat
    - Installation des lokalen Zertifizierungsstelle
    - Erstellung eines neuen Zertifikats für diverse Hostnamen
    - Ablaufdatum des Zertifikats: 25. Januar 2026

**Meldung:** Server gestartet

---

**Supervisord Logs:**
    
- Einlesen zusätzlicher Konfigurationsdateien
- Initialisierung der RPC-Schnittstelle 'supervisor'
- Achtung: Der Server 'unix_http_server' läuft ohne HTTP-Authentifizierungsprüfung
- Start von:
    - `child_exit_monitor`
    - `php-fpm`
    - `nginx`
    - `mailpit`
- PHP-FPM-Benachrichtigungen:
    - FPM läuft
    - Bereit, Verbindungen zu verarbeiten
    - Systemd-Überwachungsintervall auf 10000ms eingestellt

**Status:**
- `child_exit_monitor`: Läuft
- `php-fpm`: Läuft
- `nginx`: Läuft
- `mailpit`: Läuft



## Mails

### UpdateNotification

- **Beschreibung:** Diese E-Mail wird gesendet, um den Benutzer darüber zu informieren, dass ein TYPO3-Update erforderlich ist.
- **Attribute:** 
  - `$contentMessage`: Hauptnachrichteninhalt der E-Mail.
  - `$contendata`: Zusätzliche Daten für die E-Mail.
- **View:** `emails.update-notification`.
- **Betreff:** "TYPO3-Update erforderlich".

Um eine E-Mail mit dieser Klasse zu senden, können Sie:

```php
Mail::to($recipient)->send(new UpdateNotification($message, $data));


## Datenbank Seeders

| Seeder Name       | Zweck                                                                                              | Hauptdaten oder Aktionen                                                                               | Befehl zum Ausführen                            |
|-------------------|---------------------------------------------------------------------------------------------------|-------------------------------------------------------------------------------------------------------|------------------------------------------------|
| `DatabaseSeeder`  | Der Hauptseeder für die Anwendung. Ruft andere Seeders auf.                                        | - Ruft `NeuerSeederName` auf<br>- Nutzt die `User`-Factory zur Erzeugung von Benutzerdaten           | `ddev artisan db:seed --class=DatabaseSeeder`   |
| `NeuerSeederName` | Fügt spezifische Daten in die `projekrusta`-Tabelle ein.                                           | - Fügt `data` mit Wert `'Ihre Daten'` hinzu<br>- Fügt `name` mit Wert `'Standardwert'` hinzu           | `ddev artisan db:seed --class=NeuerSeederName`  |

**Hinweise**:
1. Für den `DatabaseSeeder`: Die Beispielzeilen zur Erstellung von Benutzern mithilfe der Factory sind im Seeder auskommentiert. Sie können sie einkommentieren, um sie zu verwenden.
2. Für den `NeuerSeederName`: Ersetzen Sie die Platzhalter `'Ihre Daten'` und `'Standardwert'` durch die tatsächlichen Werte, die Sie verwenden möchten.


## Views Dokumentation

### profile.blade.php

- **Zweck**: Zeigt das Profil eines Benutzers an.
- **Verwendete Daten**: 
  - `$user`: Das Benutzerobjekt mit Eigenschaften wie `name`, `email` etc.
  - `$posts`: Eine Liste von Beiträgen, die von diesem Benutzer veröffentlicht wurden.
- **Hauptkomponenten**: 
  - Kopfbereich: Zeigt den Benutzernamen und das Profilbild an.
  - Hauptinhalt: Zeigt die Liste der Beiträge des Benutzers an.
  - Fußzeile: Standardfußzeile der Website.
- **Abhängigkeiten**: 
  - `layouts.app`: Das Hauptlayout, von dem diese View erbt.
  - `components.alert`: Eine Komponente, die Fehlermeldungen anzeigt.
- **Befehl zum Rendern**: Wird gerendert, wenn der Benutzer `/profile/{user_id}` besucht.




## Endpunkte

Die API stellt folgende Endpunkte zur Verfügung:

- `GET /mein-endpunkt`: Abruf von allgemeinen Informationen.
- `GET /information`: Abrufen allgemeiner Daten oder Konfigurationsinformationen.
- `POST /update`: Aktualisieren von Informationen.
- `GET /projekte`: Liste aller Projekte.
- `POST /projekte`: Neues Projekt hinzufügen.
- `GET /projekte/{projektId}`: Einzelnes Projekt abrufen.
- `PUT /projekte/{projektId}`: Bestehendes Projekt aktualisieren.
- `GET /users`: Liste aller Benutzer.
- `POST /users`: Neuen Benutzer erstellen.
- `GET /users/{userId}`: Details eines bestimmten Benutzers.
- `PUT /users/{userId}`: Aktualisieren eines Benutzers.

## Schemas

Die API verwendet folgende Schemas für die Anfragen und Antworten:

- `MeinModell`
- `Projekt`
- `UpdateSchema`
- `User`

## Entwicklung und Lokales Testen

Um mit der lokalen Entwicklung und dem Testen der API zu beginnen, folgen Sie diesen Schritten:

1. Klonen Sie das Repository.
2. Installieren Sie die notwendigen Abhängigkeiten.
3. Starten Sie den lokalen Entwicklungsserver.

```bash
git clone [Repository-URL]
cd [Repository-Name]
npm install
npm start
