# UPDATES

## SOLO 3.1.1

- Eine Vielzahl veralteten Vendor-Prefixes wurden entfernt.
- Die im Theme verwendeten Animationen respektieren nun die Systemeinstellung „reduzierte Bewegung“ (prefer-reduced-motion).

### \_animation.scss

Mixins wurden um eine Media-Query ergänzt, bei der die Animation, Bewegung und Opazität auf den Standard zurückgesetzt wurden. Hier ein Beispiel für das Mixin `animate-fade-left`:

```scss
@mixin animate-fade-left($delay: 0s) {
  … @media (prefers-reduced-motion) {
    animation: none;
    transform: translateX(0);
    opacity: 100%;
  }
}
```
