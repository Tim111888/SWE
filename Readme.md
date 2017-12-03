Version: 1.2

# ActiveSlide

ActiveSlide soll einen Vortrag interaktiver gestalten.
Die Person die einen Vortrag hält, kann seine Zuhörer in das Forum einladen,
wo jene Fragen stellen oder kleine Tests zum Vortrag beantworten können.

## Was wird benötigt

Hier werde ich erläutern wie wir gemeinsam an dem Projekt arbeiten können.<br>
* [GitHub](https://github.com/join?source=header-home) <br>
GitHub Account zur Mitarbeit am Rep
* [Atom IDE](https://atom.io/download/windows_x64) oder [PHPstorm IDE](https://www.jetbrains.com/shop/eform/students)<br>
Als Entwicklungsumgebung.
* [XAMPP](https://www.apachefriends.org/download.html) <br>
Zum Ausführen der PHP Scripts
* [GitKraken](https://www.gitkraken.com/download/windows64) oder [Git](https://github.com/git-for-windows/git/releases/download/v2.15.1.windows.2/Git-2.15.1.2-64-bit.exe)<br>
Um den Dateiaustausch zwischen GitHub Repository und eurem Lokalen Repository zu realisieren

##Zugriff erhalten

### 1.0 Repository beitreten

Zuerst braucht ihr ein GitHub Account, ist dieser vorhanden, werde ich euch Push-Rechte für dieses Repository geben.
Schreibt mir dazu einfach in WhatsApp euren Benutzernamen, damit ich euch einladen kann.

### 1.1 Arbeitsumgebung schaffen

Klont das Repository mit Git oder GitKrakenp in ein lokales Repository.

### 1.2 Repository in eurer IDE einbinden

![IDE](https://puu.sh/yxhrA/da7ef0fe0f.png "Einbinden")

![IDE](https://puu.sh/yxhA4/8484198509.png "Auswahl treffen")

![IDE](https://puu.sh/yxhAj/95ac6e0ef5.png "Geklontes Rep auswählen")

![IDE](https://puu.sh/yxhAM/92a9b2a016.png "Server auswählen")

### 1.3 Repository in eurer IDE einbinden

Hier sind alle Commits von euch und anderen Mitgliedern zu sehen<br>
Außerdem wird angezeigt, welche Files geändert wurden und man kann sich anzeigen lassen <br>
Wie der Unterschied vorher/nachher war.

![GitKraken](https://puu.sh/yxjgd/8b016059ca.png "Überblick")

Verändert ihr nun ein File in eurer IDE, wird diese in der IDE highlighted (Readme.md)<br>
Wenn ihr soweit fertig seid, testet ihr die Funktionen lokal und bei Fertigstellung macht ihr ein Commit.

![IDE](https://puu.sh/yxjpO/a56c7b1d09.png "Changes")

Hier blau markiert 

## Local auf Master pushen

Bei //WIP kommt der Titel des Commits

![GitKraken](https://puu.sh/yxjvf/2697d37e35.png "Was wurde geändert")

Ihr könnt dann nochmal ein BLick auf die Veränderungen machen.<br>
Dann Staged ihr das/die File/Files

![GitKraken](https://puu.sh/yxjyF/6aab831c99.png "Staging")

Dnach noch eine CommitMessage und dann auf Commit Changes

![GitKraken](https://puu.sh/yxjBS/7e0b3eb015.png "Staging")

Als letztes müsst ihr den Commit jetzt aufs GitHub pushen

![GitKraken](https://puu.sh/yxjEG/6b8bbb324a.png "Staging")

## Master auf Local pullen

Wie man hier sieht, gibt es "2 master" brands.
Der blaue ist der momenante Stand auf dem GitHub
Der türkise ist euer lokaler Stand.


![GitKraken](https://puu.sh/yxkx9/17e51959f4.png "Staging")

Deleted den Stash und holt euch die neueste Version, dann pushed ihr nocheinmal.<br>
Da wir nur mit einem brand arbeiten und die später nicht mergen werden.

Wenn es eine neue Version des Masters gibt, wird diese angezeigt.
Diese kann dann einfach gepulled werden.
