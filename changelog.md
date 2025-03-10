# Changelog

## 3.1.1 (09.01.2024)

- CSS Animationen respektieren nun die Systemeinstellung „reduzierte Bewegung“ (prefer-reduced-motion)
- Veraltete Vendor-Prefixes wurden entfernt. Prefixes werden nur noch ergänzt, wenn > 5% der Browser weltweit (laut caniuse) diese benötigen. Dadurch werden die SCSS-Dateien nun deutlich übersichtlicher und etwas kleiner.

Theme-Anpassungen kannst du über die [UPDATE.md](UPDATE.md) nachvollziehen.

## 3.1.0 (27.11.2024)

- neue Theme Demo + Layout
- Im Hero-Element kann nun ein zusätzliches Bild (unabhängig vom Hintergrund) gewählt und neben, über oder unter dem Text dargestellt werden
- Elemente können nun animiert (z.B. Fade-In) werden, wenn sie im sichtbaren Bereich sind

## 3.0.2 (16.08.2024)

- Theme auf Contao 5.3 LTS fixiert.

## 3.0.1 (06.03.2024)

- Die mobile Navigation wird nun standardäßig von einem Script ohne jQuery geöffnet/geschlossen.

## 3.0.0 (16.02.2024)

- SOLO für Contao 5.3 veröffentlicht

## 3.0.0-RC2 (26.01.2024)

- Verwendung der neuen Slider- und Akkordeon-Elemente (Nested Elements)
- kleine Bugfixes behoben und nicht mehr genutzte CSS-Anweisungen entfernt

## 3.0.0-RC1 (09.01.2024)

- Komplett neue Version für Contao 5.2

## 2.7.2 (07.12.2022)

- Entwickler Edition: postcss als Abhängigkeit ergänzt

## 2.7.1 (25.03.2022)

- PHP 8 Unterstützung
- Entwickler Edition: node und gulp aktualisiert

## 2.7.0 (15.02.2022)

- Unterstützung für Contao 4.13
- Contao 4.12 Support eingestellt
- Entwickler Edition: node und gulp aktualisiert, gulp tasks linter und images entfernt, da die Plugins nicht mehr aktualisiert werden und ein potenzielles Sicherheitsrisiko sind

## 2.6.0 (06.09.2021)

- Unterstützung für Contao 4.12
- Contao 4.11 Support eingestellt
- Entwickler Edition: node und gulp aktualisiert
- FIX: localconfig-Einstellungen lassen sich nun auch über die config.yml vornehmen

## 2.5.0 (06.03.2021)

- Unterstützung für Contao 4.11
- Contao 4.10 Support eingestellt

## 2.4.2 (12.02.2021)

- Kompatibilität zum Contao Manager 1.4 bzw Composer 2 wiederhergestellt
- Contao 4.4 Support eingestellt

## 2.4.1 (13.10.2020)

- veraltete README entfernt

## 2.4.0 (15.09.2020)

- Kompatibilität zu Contao 4.10 hergestellt

## 2.3.0 (21.02.2020)

- Kompatibilität zu Contao 4.9 hergestellt
- Server Edition: Opera Vendorprefixes und falsche Symlinks wurden entfernt
- Server Edition: Bugfixes in CTO-Dateien behoben

## 2.2.0 (19.11.2019)

- Die Demo der Server-Edition lässt sich nun direkt über den Contao Manager installieren, s.a. hhttps://erdmann-freunde.de/dokumentationen/contao-themes/theme-installieren/server-edition/theme-mit-demo/
- Für die Instalallation _mit Demo_ und _ohne Demo_ gibt es nun getrennte ZIP-Archive

## 2.1.0 (11.11.2019)

- Webfonts werden nicht länger über Google, sondern vom eigenen Server geladen.

## 2.0.3 (11.10.2019)

- Anpassung der Ordner-Struktur. Es wird nun einheitlich der Ordner `theme` statt wie bisher `solo` verwendet
- Ergänzung der fehlenden 4.8 SQL-DEMO-Datei

## 2.0.2 (16.09.2019)

- Kompatibilität zu Contao 4.8 hergestellt

## 2.0.1 (12.09.2019)

- Einführung des solo-theme-bundle (installierbar über Composer/ContaoManager)
- Überarbeitung der ReadME

## 2.0.0 (02.07.2019)

- Überarbeitung der Demo-Inhalte

## 1.5.0

- Einführung einer zusätzlichen Server Edition
- die bisherige Version heißt nun Entwickler Edition

siehe auch https://erdmann-freunde.de/produkte/contao-themes/detail/unterschied-server-entwickler-edition/
