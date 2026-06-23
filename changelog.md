# Changelog

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
