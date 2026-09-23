# Changelog

## 4.0.1 (23.09.2026)

- Voraussetzungen im Bundle präzisiert: Contao 5.7 und Theme Toolbox 4.2 werden jetzt ausdrücklich verlangt. Bisher standen dort ^5.3 bzw. ^4.0, obwohl SOLO 4 Twig-Templates aus Contao 5.7 nutzt und Presets sowie Design-Tokens erst mit dem Live-Editor der Toolbox 4.2 funktionieren.
- Altes TinyMCE-Stylesheet aus `files/tinymce` entfernt. Das Stylesheet für den Editor entsteht beim Kompilieren aus `scss/tinymce.scss` und liegt unter `assets/solo-theme/css/tinymce.css`.
- `_config.scss` aufgeräumt: ungenutzte Variablen `$news-grid-columns-*` entfernt (die Spaltenzahl der News steuern die Custom Properties `--news-grid-columns-*`) und falsche Theme-Bezeichnung im Dateikopf korrigiert.
- Dokumentation im Demo-Inhalt überarbeitet: Die Seiten „Theme anpassen“, „Templates“ und veraltete Hinweise auf `files/theme` sind entfallen. Sie stehen jetzt in der zentralen Dokumentation unter docs.flow-contao-themes.de, auf die die Einleitung verlinkt.

## 4.0.0 (23.06.2026)

Die neue Version 4.0 bringt neben einer verbesserten Unterstützung für Contao 5.7 (z.B. Twig-Templates) eine völlig neue Theme-Struktur und Arbeitsweise über die Theme Toolbox mit.

### Neue Theme-Struktur

- Assets wie SCSS, Bilder, JS und Fonts liegen nicht mehr unter `files/theme`, sondern unter `layout/solo-theme`
- Dadurch lassen sich Assets nicht mehr über die Dateiverwaltung bearbeiten, sondern über den Theme-Editor der Theme Toolbox oder einen eigenen Code-Editor
- JS-Dateien (`navigation.js`, `animations.js`) werden nun unkomprimiert ausgeliefert, damit sie sich über den Theme-Editor anpassen lassen
- Theme-Updates lassen sich jetzt direkt über das Backend der Theme Toolbox hochladen
- Theme Toolbox auf Version 4 angehoben, inkl. mitgelieferter Presets (marine, sand, beere) und Design-Tokens

### Inhaltselemente

- Neues Inhaltselement „Zitat“ löst das bisherige tinyMCE Template ab.

### Templates

- Modul-, News- und Theme-Templates wurden auf das neue Twig-Format umgestellt (u. a. `mod_article.html.twig`, `news_latest.html.twig`, `news_full`-Templates in 2 Varianten, `event_teaser.html.twig`, `js_animations.html.twig`, `js_nav--mobile.html.twig`)

### Styling

- SCSS-Pfade und Asset-URLs an die neue Theme-Struktur angepasst
- Webfonts werden mit `font-display: swap` ausgeliefert
