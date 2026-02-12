# Buttons

Bootstrap button component for actions in tables, forms, cards, and more. CoreUI for Bootstrap provides various styles, states, and size. Ready to use and easy to customize.

## Base class

CoreUI has a base `.btn` class that sets up basic styles such as padding and content alignment. By default, `.btn` controls have a transparent border and background color, and lack any explicit focus and hover styles.

```html
<button type="button" class="btn">Base class</button>
```

The `.btn` class is intended to be used in conjunction with our button variants, or to serve as a basis for your own custom styles.


If you are using the `.btn` class on its own, remember to at least define some explicit `:focus` and/or `:focus-visible` styles.


## Variants

CoreUI includes a bunch of predefined Bootstrap buttons, each serving its own semantic purpose. CoreUI also offers some unique buttons styles.

Buttons show what action will happen when the user clicks or touches it. Bootstrap buttons are used to initialize operations, both in the background or foreground of an experience.

```html

<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>

<button type="button" class="btn btn-link">Link</button>
```


##### Conveying meaning to assistive technologies

Relying on color to convey meaning creates a visual cue that assistive technologies, like screen readers, cannot perceive. It&#39;s essential that any information represented by color is either apparent from the content itself (e.g., the visible text) or supplemented by alternative methods, such as extra text using the `.visually-hidden` class.




### With icons

You can combine button with our [CoreUI Icons](https://icons.coreui.io/).

```html

<button type="button" class="btn btn-primary"><span class="cil-contrast"></span> Primary</button>
<button type="button" class="btn btn-secondary"><span class="cil-contrast"></span> Secondary</button>
<button type="button" class="btn btn-success"><span class="cil-contrast"></span> Success</button>
<button type="button" class="btn btn-danger"><span class="cil-contrast"></span> Danger</button>
<button type="button" class="btn btn-warning"><span class="cil-contrast"></span> Warning</button>
<button type="button" class="btn btn-info"><span class="cil-contrast"></span> Info</button>
<button type="button" class="btn btn-light"><span class="cil-contrast"></span> Light</button>
<button type="button" class="btn btn-dark"><span class="cil-contrast"></span> Dark</button>

<button type="button" class="btn btn-link">Link</button>
```

## Disable text wrapping

If you don't want the button text to wrap, you can add the `.text-nowrap` class to the button. In Sass, you can set `$btn-white-space: nowrap` to disable text wrapping for each button.

## Button tags

The `.btn` classes are designed for `<button>` ,  `<a>`  or  `<input>` elements (though some browsers may apply a slightly different rendering).

If you're using `.btn` classes on `<a>` elements that are used to trigger functionality ex. collapsing content,  these links should be given a `role="button"` to adequately communicate their meaning to assistive technologies such as screen readers.

```html
<a class="btn btn-primary" href="#" role="button">Link</a>
<button class="btn btn-primary" type="submit">Button</button>
<input class="btn btn-primary" type="button" value="Input">
<input class="btn btn-primary" type="submit" value="Submit">
<input class="btn btn-primary" type="reset" value="Reset">
```

## Outline buttons

### Base outline style: `.btn-outline`

The `.btn-outline` class provides a neutral outline button style without any color modifiers. It’s useful as a foundation for minimal buttons without background color or strong visual emphasis.

```html
<button type="button" class="btn btn-outline">Base outline button</button>
<button type="button" class="btn btn-outline active">Active state</button>
<button type="button" class="btn btn-outline" disabled>Disabled state</button>
```

These buttons use a transparent background, subtle border, and inherit text color from the parent context. They’re best suited for minimalist UI elements like modals, toolbars, or secondary actions.

### Themed outline variants: `.btn-outline-*`

If you need a button, but without the strong background colors. Replace the default modifier classes with the `.btn-outline-*` ones to remove all background colors on any element with `.btn` class.

```html

<button type="button" class="btn btn-outline-primary">Primary</button>
<button type="button" class="btn btn-outline-secondary">Secondary</button>
<button type="button" class="btn btn-outline-success">Success</button>
<button type="button" class="btn btn-outline-danger">Danger</button>
<button type="button" class="btn btn-outline-warning">Warning</button>
<button type="button" class="btn btn-outline-info">Info</button>
<button type="button" class="btn btn-outline-light">Light</button>
<button type="button" class="btn btn-outline-dark">Dark</button>
```

These outline variant buttons retain transparent backgrounds by default, but display a subtle background tint on hover or focus to indicate interactivity. They're ideal for secondary actions when you want to visually differentiate from solid `.btn-*` buttons.


Some of the button styles use a relatively light foreground color, and should only be used on a dark background in order to have sufficient contrast.


## Ghost buttons

### Base ghost style: `.btn-ghost`

Use the `.btn-ghost` class to create ultra-minimalist buttons with no borders and a fully transparent background. These buttons rely solely on text color for visibility and apply a subtle background highlight on hover or active states.

They’re perfect for interfaces where you want buttons to be present but visually unobtrusive—such as action buttons in modals, cards, or toolbars.

```html
<button type="button" class="btn btn-ghost">Base ghost button</button>
<button type="button" class="btn btn-ghost active">Active state</button>
<button type="button" class="btn btn-ghost" disabled>Disabled state</button>
```

### Themed ghost variants: `.btn-ghost-*`

To apply theme colors to ghost buttons, use `.btn-ghost-*` classes. These variants color only the text by default. On hover or focus, they add a faint background tint corresponding to the theme color.

```html
<button type="button" class="btn btn-ghost-primary">Primary</button>
<button type="button" class="btn btn-ghost-secondary">Secondary</button>
<button type="button" class="btn btn-ghost-success">Success</button>
<button type="button" class="btn btn-ghost-danger">Danger</button>
<button type="button" class="btn btn-ghost-warning">Warning</button>
<button type="button" class="btn btn-ghost-info">Info</button>
```

## Sizes

Larger or smaller buttons? Add `.btn-lg` or `.btn-sm` for additional sizes.

```html
<button type="button" class="btn btn-primary btn-lg">Large button</button>
<button type="button" class="btn btn-secondary btn-lg">Large button</button>
```

```html
<button type="button" class="btn btn-primary btn-sm">Small button</button>
<button type="button" class="btn btn-secondary btn-sm">Small button</button>
```

You can even roll your own custom sizing with CSS variables:

```html
<button type="button" class="btn btn-primary"
        style="--cui-btn-padding-y: .25rem; --cui-btn-padding-x: .5rem; --cui-btn-font-size: .75rem;">
  Custom button
</button>
```


## Shapes

### Pill buttons

```html

<button type="button" class="btn btn-primary rounded-pill">Primary</button>
<button type="button" class="btn btn-secondary rounded-pill">Secondary</button>
<button type="button" class="btn btn-success rounded-pill">Success</button>
<button type="button" class="btn btn-danger rounded-pill">Danger</button>
<button type="button" class="btn btn-warning rounded-pill">Warning</button>
<button type="button" class="btn btn-info rounded-pill">Info</button>
<button type="button" class="btn btn-light rounded-pill">Light</button>
<button type="button" class="btn btn-dark rounded-pill">Dark</button>
```

<div class="pro-component"></div>

### Square buttons

```html

<button type="button" class="btn btn-primary rounded-0">Primary</button>
<button type="button" class="btn btn-secondary rounded-0">Secondary</button>
<button type="button" class="btn btn-success rounded-0">Success</button>
<button type="button" class="btn btn-danger rounded-0">Danger</button>
<button type="button" class="btn btn-warning rounded-0">Warning</button>
<button type="button" class="btn btn-info rounded-0">Info</button>
<button type="button" class="btn btn-light rounded-0">Light</button>
<button type="button" class="btn btn-dark rounded-0">Dark</button>
```



## Disabled state

Add the `disabled` boolean attribute to any `<button>` element to make buttons look inactive. Disabled button has `pointer-events: none` applied to, disabling hover and active states from triggering.

```html
<button type="button" class="btn btn-lg btn-primary" disabled>Primary button</button>
<button type="button" class="btn btn-secondary btn-lg" disabled>Button</button>
```

Disabled buttons using the `<a>` element act a little different:

`<a>`s don't support the `disabled` attribute, so you have to add `.disabled` class to make buttons look inactive. The disabled bootstrap button must have the `aria-disabled="true"` attribute to show the state of the element to assistive technologies.

```html
<a href="#" class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Primary link</a>
<a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a>
```

### Link functionality caveat

To cover cases where you have to keep the `href` attribute on a disabled link, the `.disabled` class uses `pointer-events: none` to try to disable the link functionality of `<a>`s. Note that this CSS property is not yet standardized for HTML, but all modern browsers support it. In addition, even in browsers that do support `pointer-events: none`, keyboard navigation remains unaffected, meaning that sighted keyboard users and users of assistive technologies will still be able to activate these links. So to be safe, in addition to `aria-disabled="true"`, also include a `tabindex="-1"` attribute on these links to prevent them from receiving keyboard focus, and use custom JavaScript to disable their functionality altogether.

```html
<a href="#" class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Primary link</a>
<a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a>
```

## Block buttons

Create buttons that span the full width of a parent—by using utilities.

```html
<div class="d-grid gap-2">
  <button class="btn btn-primary" type="button">Button</button>
  <button class="btn btn-primary" type="button">Button</button>
</div>
```

Here we create a responsive variation, starting with vertically stacked buttons until the `md` breakpoint, where `.d-md-block` replaces the `.d-grid` class, thus nullifying the `gap-2` utility. Resize your browser to see them change.

```html
<div class="d-grid gap-2 d-md-block">
  <button class="btn btn-primary" type="button">Button</button>
  <button class="btn btn-primary" type="button">Button</button>
</div>
```

You can adjust the width of your block buttons with grid column width classes. For example, for a half-width "block button", use `.col-6`. Center it horizontally with `.mx-auto`, too.

```html
<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="button">Button</button>
  <button class="btn btn-primary" type="button">Button</button>
</div>
```

Additional utilities can be used to adjust the alignment of buttons when horizontal. Here we've taken our previous responsive example and added some flex utilities and a margin utility on the button to right align the buttons when they're no longer stacked.

```html
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-primary me-md-2" type="button">Button</button>
  <button class="btn btn-primary" type="button">Button</button>
</div>
```

## Button plugin

The button plugin allows you to create simple on/off toggle buttons.


Visually, these toggle buttons are identical to the [checkbox toggle buttons](/forms/checks-radios/#checkbox-toggle-buttons). However, they are conveyed differently by assistive technologies: the checkbox toggles will be announced by screen readers as "checked"/"not checked" (since, despite their appearance, they are fundamentally still checkboxes), whereas these toggle buttons will be announced as "button"/"button pressed". The choice between these two approaches will depend on the type of toggle you are creating, and whether or not the toggle will make sense to users when announced as a checkbox or as an actual button.


### Toggle states

Add `data-coreui-toggle="button"` to toggle a button's `active` state. If you're pre-toggling a button, you must manually add the `.active` class **and** `aria-pressed="true"` to the `<button>`.

```html
<p class="d-inline-flex gap-1">
  <button type="button" class="btn" data-coreui-toggle="button">Toggle button</button>
  <button type="button" class="btn active" data-coreui-toggle="button" aria-pressed="true">Active toggle button</button>
  <button type="button" class="btn" disabled data-coreui-toggle="button">Disabled toggle button</button>
</p>
<p class="d-inline-flex gap-1">
  <button type="button" class="btn btn-primary" data-coreui-toggle="button">Toggle button</button>
  <button type="button" class="btn btn-primary active" data-coreui-toggle="button" aria-pressed="true">Active toggle button</button>
  <button type="button" class="btn btn-primary" disabled data-coreui-toggle="button">Disabled toggle button</button>
</p>
```

```html
<p class="d-inline-flex gap-1">
  <a href="#" class="btn" role="button" data-coreui-toggle="button">Toggle link</a>
  <a href="#" class="btn active" role="button" data-coreui-toggle="button" aria-pressed="true">Active toggle link</a>
  <a class="btn disabled" aria-disabled="true" role="button" data-coreui-toggle="button">Disabled toggle link</a>
</p>
<p class="d-inline-flex gap-1">
  <a href="#" class="btn btn-primary" role="button" data-coreui-toggle="button">Toggle link</a>
  <a href="#" class="btn btn-primary active" role="button" data-coreui-toggle="button" aria-pressed="true">Active toggle link</a>
  <a class="btn btn-primary disabled" aria-disabled="true" role="button" data-coreui-toggle="button">Disabled toggle link</a>
</p>
```

### Methods

You can create a button instance with the button constructor, for example:

```js
const bsButton = new coreui.Button('#myButton')
```


| Method | Description |
| --- | --- |
| `toggle` | Toggles push state. Gives the button the appearance that it has been activated. |
| `dispose` | Destroys an element's button. (Removes stored data on the DOM element) |
| `getInstance` | Static method which allows you to get the button instance associated to a DOM element, you can use it like this: `coreui.Button.getInstance(element)`|
| `getOrCreateInstance` | Static method which returns a button instance associated to a DOM element or create a new one in case it wasn't initialized. You can use it like this: `coreui.Button.getOrCreateInstance(element)` |


For example, to toggle all buttons

```js
document.querySelectorAll('.btn').forEach(buttonElement => {
  const button = coreui.Button.getOrCreateInstance(buttonElement)
  button.toggle()
})
```

## Customizing

### CSS variables

Buttons use local CSS variables on `.btn` for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.

```scss
--cui-btn-padding-x: #{$btn-padding-x};
--cui-btn-padding-y: #{$btn-padding-y};
--cui-btn-font-family: #{$btn-font-family};
@include rfs($btn-font-size, --cui-btn-font-size);
--cui-btn-font-weight: #{$btn-font-weight};
--cui-btn-line-height: #{$btn-line-height};
--cui-btn-color: #{$btn-color};
--cui-btn-bg: transparent;
--cui-btn-border-width: #{$btn-border-width};
--cui-btn-border-color: transparent;
--cui-btn-border-radius: #{$btn-border-radius};
--cui-btn-hover-border-color: transparent;
--cui-btn-box-shadow: #{$btn-box-shadow};
--cui-btn-disabled-opacity: #{$btn-disabled-opacity};
--cui-btn-focus-box-shadow: 0 0 0 #{$btn-focus-width} rgba(var(--cui-btn-focus-shadow-rgb), .5);
```

Each `.btn-*` modifier class updates the appropriate CSS variables to minimize additional CSS rules with our `button-variant()`, `button-outline-variant()`, and `button-size()` mixins.

Here's an example of building a custom `.btn-*` modifier class like we do for the buttons unique to our docs by reassigning Bootstrap's CSS variables with a mixture of our own CSS and Sass variables.

<div class="docs-example">
  <button type="button" class="btn btn-cd-primary">Custom button</button>
</div>

```scss
.btn-cd-primary {
  --cui-btn-font-weight: 600;
  --cui-btn-color: var(--cui-white);
  --cui-btn-bg: var(--cd-violet-bg);
  --cui-btn-border-color: var(--cd-violet-bg);
  --cui-btn-hover-color: var(--cui-white);
  --cui-btn-hover-bg: #{shade-color($cd-violet, 10%)};
  --cui-btn-hover-border-color: #{shade-color($cd-violet, 10%)};
  --cui-btn-focus-shadow-rgb: var(--cd-violet-rgb);
  --cui-btn-active-color: var(--cui-btn-hover-color);
  --cui-btn-active-bg: #{shade-color($cd-violet, 20%)};
  --cui-btn-active-border-color: #{shade-color($cd-violet, 20%)};
}

```

### SASS variables

```scss
$btn-color:                   var(--#{$prefix}body-color);
$btn-padding-y:               $input-btn-padding-y;
$btn-padding-x:               $input-btn-padding-x;
$btn-font-family:             $input-btn-font-family;
$btn-font-size:               $input-btn-font-size;
$btn-line-height:             $input-btn-line-height;
$btn-white-space:             null; // Set to `nowrap` to prevent text wrapping

$btn-padding-y-sm:            $input-btn-padding-y-sm;
$btn-padding-x-sm:            $input-btn-padding-x-sm;
$btn-font-size-sm:            $input-btn-font-size-sm;

$btn-padding-y-lg:            $input-btn-padding-y-lg;
$btn-padding-x-lg:            $input-btn-padding-x-lg;
$btn-font-size-lg:            $input-btn-font-size-lg;

$btn-border-width:            $input-btn-border-width;

$btn-font-weight:             $font-weight-normal;
$btn-box-shadow:              inset 0 1px 0 rgba($white, .15), 0 1px 1px rgba($black, .075);
$btn-focus-width:             $input-btn-focus-width;
$btn-focus-box-shadow:        $input-btn-focus-box-shadow;
$btn-disabled-opacity:        .65;
$btn-active-box-shadow:       inset 0 3px 5px rgba($black, .125);

$btn-link-color:              var(--#{$prefix}link-color);
$btn-link-hover-color:        var(--#{$prefix}link-hover-color);
$btn-link-disabled-color:     $gray-600;
$btn-link-focus-shadow-rgb:   to-rgb(color.mix(color-contrast-variables($link-color, $color-contrast-dark, $color-contrast-light, $white, $black, $min-contrast-ratio), $link-color, 15%));

// Allows for customizing button radius independently from global border radius
$btn-border-radius:           var(--#{$prefix}border-radius);
$btn-border-radius-sm:        var(--#{$prefix}border-radius-sm);
$btn-border-radius-lg:        var(--#{$prefix}border-radius-lg);

$btn-transition:              color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;

$btn-hover-bg-shade-amount:       15%;
$btn-hover-bg-tint-amount:        15%;
$btn-hover-border-shade-amount:   20%;
$btn-hover-border-tint-amount:    10%;
$btn-active-bg-shade-amount:      20%;
$btn-active-bg-tint-amount:       20%;
$btn-active-border-shade-amount:  25%;
$btn-active-border-tint-amount:   10%;

```

### SASS mixins

CoreUI's button component is built with a base-modifier class approach. This means the bulk of the styling is contained to a base class `.btn` while style variations are confined to modifier classes (e.g., `.btn-danger`). These modifier classes are built from the `$button-variants` map to make customizing the number and name of our modifier classes.

There are three mixins for buttons: button and button outline variant mixins, plus a button size mixin.

```scss
@mixin button-variant(
  $background,
  $border,
  $color: color-contrast($background),
  $hover-background: if($color == $color-contrast-light, shade-color($background, $btn-hover-bg-shade-amount), tint-color($background, $btn-hover-bg-tint-amount)),
  $hover-border: if($color == $color-contrast-light, shade-color($border, $btn-hover-border-shade-amount), tint-color($border, $btn-hover-border-tint-amount)),
  $hover-color: color-contrast($hover-background),
  $active-background: if($color == $color-contrast-light, shade-color($background, $btn-active-bg-shade-amount), tint-color($background, $btn-active-bg-tint-amount)),
  $active-border: if($color == $color-contrast-light, shade-color($border, $btn-active-border-shade-amount), tint-color($border, $btn-active-border-tint-amount)),
  $active-color: color-contrast($active-background),
  $disabled-background: $background,
  $disabled-border: $border,
  $disabled-color: color-contrast($disabled-background)
) {
  --#{$prefix}btn-color: #{$color};
  --#{$prefix}btn-bg: #{$background};
  --#{$prefix}btn-border-color: #{$border};
  --#{$prefix}btn-hover-color: #{$hover-color};
  --#{$prefix}btn-hover-bg: #{$hover-background};
  --#{$prefix}btn-hover-border-color: #{$hover-border};
  --#{$prefix}btn-focus-shadow-rgb: #{to-rgb(color.mix($color, $border, 15%))};
  --#{$prefix}btn-active-color: #{$active-color};
  --#{$prefix}btn-active-bg: #{$active-background};
  --#{$prefix}btn-active-border-color: #{$active-border};
  --#{$prefix}btn-active-shadow: #{$btn-active-box-shadow};
  --#{$prefix}btn-disabled-color: #{$disabled-color};
  --#{$prefix}btn-disabled-bg: #{$disabled-background};
  --#{$prefix}btn-disabled-border-color: #{$disabled-border};
}

```

```scss
@mixin button-outline-variant(
  $color,
  $color-hover: color-contrast($color),
  $active-background: $color,
  $active-border: $color,
  $active-color: color-contrast($active-background)
) {
  --#{$prefix}btn-color: #{$color};
  --#{$prefix}btn-border-color: #{$color};
  --#{$prefix}btn-hover-color: #{$color-hover};
  --#{$prefix}btn-hover-bg: #{$active-background};
  --#{$prefix}btn-hover-border-color: #{$active-border};
  --#{$prefix}btn-focus-shadow-rgb: #{to-rgb($color)};
  --#{$prefix}btn-active-color: #{$active-color};
  --#{$prefix}btn-active-bg: #{$active-background};
  --#{$prefix}btn-active-border-color: #{$active-border};
  --#{$prefix}btn-active-shadow: #{$btn-active-box-shadow};
  --#{$prefix}btn-disabled-color: #{$color};
  --#{$prefix}btn-disabled-bg: transparent;
  --#{$prefix}btn-disabled-border-color: #{$color};
  --#{$prefix}gradient: none;
}

```

```scss
@mixin button-ghost-variant(
  $color,
  $color-hover: color-contrast($color),
  $hover-background: $color,
  $hover-border: $color,
  $hover-color: color-contrast($color),
  $active-background: $color,
  $active-border: $color,
  $active-color: color-contrast($color)
) {
  --#{$prefix}btn-color: #{$color};
  --#{$prefix}btn-border-color: transparent;
  --#{$prefix}btn-hover-bg: #{$hover-background};
  --#{$prefix}btn-hover-border-color: #{$hover-border};
  --#{$prefix}btn-hover-color: #{$color-hover};
  --#{$prefix}btn-active-bg: #{$active-background};
  --#{$prefix}btn-active-border-color: #{$active-border};
  --#{$prefix}btn-active-color: #{$active-color};
  --#{$prefix}btn-disabled-color: #{$color};
  --#{$prefix}btn-disabled-bg: transparent;
  --#{$prefix}btn-disabled-border-color: transparent;
}

```

```scss
@mixin button-size($padding-y, $padding-x, $font-size, $border-radius) {
  --#{$prefix}btn-padding-y: #{$padding-y};
  --#{$prefix}btn-padding-x: #{$padding-x};
  @include rfs($font-size, --#{$prefix}btn-font-size);
  --#{$prefix}btn-border-radius: #{$border-radius};
}

```

### SASS loops

Button variants (for regular and outline buttons) use their respective mixins with our `$theme-colors` map to generate the modifier classes in `scss/_buttons.scss`.

```scss
@each $color, $value in $theme-colors {
  .btn-#{$color} {
    @if $color == &#34;light&#34; {
      @include button-variant(
        $value,
        $value,
        $hover-background: shade-color($value, $btn-hover-bg-shade-amount),
        $hover-border: shade-color($value, $btn-hover-border-shade-amount),
        $active-background: shade-color($value, $btn-active-bg-shade-amount),
        $active-border: shade-color($value, $btn-active-border-shade-amount)
      );
    } @else if $color == &#34;dark&#34; {
      @include button-variant(
        $value,
        $value,
        $hover-background: tint-color($value, $btn-hover-bg-tint-amount),
        $hover-border: tint-color($value, $btn-hover-border-tint-amount),
        $active-background: tint-color($value, $btn-active-bg-tint-amount),
        $active-border: tint-color($value, $btn-active-border-tint-amount)
      );
    } @else {
      @include button-variant($value, $value);
    }
  }
}

@each $color, $value in $theme-colors {
  .btn-outline-#{$color} {
    @include button-outline-variant($value);
  }
}

@each $color, $value in $theme-colors {
  .btn-ghost-#{$color} {
    @include button-ghost-variant($value);
  }
}

```

<h2 id="coreui-vs-bootstrap">CoreUI vs Bootstrap <a class="anchor-link" href="#coreui-vs-bootstrap" aria-label="Link to this section: CoreUI vs Bootstrap"></a></h2>
<p>While this Button component is fully compatible with Bootstrap and follows its core principles, CoreUI delivers a more complete solution for modern app development.</p>
<p><strong>What sets CoreUI apart from Bootstrap?</strong></p>
<ul>
<li>✅ <strong>Fully compatible with Bootstrap</strong> – Built directly on Bootstrap, all classes and behaviors work as expected.</li>
<li>🧠 <strong>Framework-native versions</strong> – CoreUI provides dedicated libraries for <a href="https://coreui.io/react/">React.js</a>, <a href="https://coreui.io/vue/">Vue.js</a>, and <a href="https://coreui.io/angular/">Angular</a>, unlike Bootstrap which relies on third-party plugins for JavaScript frameworks.</li>
<li>👨‍💻 <strong>Maintained by a full-time team</strong> – CoreUI is developed as a professional product, not a volunteer-driven project.</li>
<li>📦 <strong>More built-in components</strong> – Includes additional ready-to-use components like range sliders, multi-selects, steppers, etc.</li>
<li>🛠️ <strong>Sass Modules support today</strong> – CoreUI already supports Sass Modules, which are planned for Bootstrap 6.</li>
<li>🌍 <strong>Better LTR/RTL support</strong> – Uses modern CSS logical properties for seamless bidirectional layout support.</li>
<li>🔒 <strong>LTS (Long-Term Support)</strong> – Bootstrap now offers LTS only via paid third parties like HeroDevs, while CoreUI continues to offer long-term support natively and for free.</li>
</ul>
<p>Whether you&rsquo;re building internal tools, dashboards, or SaaS platforms — CoreUI combines the familiarity of Bootstrap with a more powerful, scalable, and production-ready ecosystem.</p>
<p>👉 <a href="https://coreui.io/bootstrap/">Explore CoreUI Bootstrap Components</a><br>
👉 <a href="https://coreui.io/bootstrap/docs/getting-started/introduction/#coreui-vs-bootstrap">Compare CoreUI vs Bootstrap</a></p>