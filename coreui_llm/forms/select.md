# Select

Customize the native `<select>`s with custom CSS that changes the element's initial appearance.

## Default

Custom `<select>` menus need only a custom class, `.form-select` to trigger the custom styles. Custom styles are limited to the `<select>`'s initial appearance and cannot modify the `<option>`s due to browser limitations.

```html
<select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
```

## Sizing

You may also choose from small and large custom selects to match our similarly sized text inputs.

```html
<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

<select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
```

The `multiple` attribute is also supported:

```html
<select class="form-select" multiple aria-label="multiple select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
```

As is the `size` attribute:

```html
<select class="form-select" size="3" aria-label="size 3 select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
```

## Disabled

Add the `disabled` boolean attribute on a select to give it a grayed out appearance and remove pointer events.

```html
<select class="form-select" aria-label="Disabled select example" disabled>
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
```

## Customizing

### SASS variables

```scss
$form-select-padding-y:             $input-padding-y;
$form-select-padding-x:             $input-padding-x;
$form-select-font-family:           $input-font-family;
$form-select-font-size:             $input-font-size;
$form-select-indicator-padding:     $form-select-padding-x * 3; // Extra padding for background-image
$form-select-font-weight:           $input-font-weight;
$form-select-line-height:           $input-line-height;
$form-select-color:                 $input-color;
$form-select-bg:                    $input-bg;
$form-select-disabled-color:        null;
$form-select-disabled-bg:           $input-disabled-bg;
$form-select-disabled-border-color: $input-disabled-border-color;
$form-select-bg-position:           right $form-select-padding-x center;
$form-select-bg-size:               16px 12px; // In pixels because image dimensions
$form-select-indicator-color:       $gray-800;
$form-select-indicator:             url(&#34;data:image/svg&#43;xml,&lt;svg xmlns=&#39;http://www.w3.org/2000/svg&#39; viewBox=&#39;0 0 16 16&#39;&gt;&lt;path fill=&#39;none&#39; stroke=&#39;#{$form-select-indicator-color}&#39; stroke-linecap=&#39;round&#39; stroke-linejoin=&#39;round&#39; stroke-width=&#39;2&#39; d=&#39;m2 5 6 6 6-6&#39;/&gt;&lt;/svg&gt;&#34;);

$form-select-feedback-icon-padding-end: $form-select-padding-x * 2.5 &#43; $form-select-indicator-padding;
$form-select-feedback-icon-position:    center right $form-select-indicator-padding;
$form-select-feedback-icon-size:        $input-height-inner-half $input-height-inner-half;

$form-select-border-width:        $input-border-width;
$form-select-border-color:        $input-border-color;
$form-select-border-radius:       $input-border-radius;
$form-select-box-shadow:          var(--#{$prefix}box-shadow-inset);

$form-select-focus-border-color:  $input-focus-border-color;
$form-select-focus-width:         $input-focus-width;
$form-select-focus-box-shadow:    0 0 0 $form-select-focus-width $input-btn-focus-color;

$form-select-padding-y-sm:        $input-padding-y-sm;
$form-select-padding-x-sm:        $input-padding-x-sm;
$form-select-font-size-sm:        $input-font-size-sm;
$form-select-border-radius-sm:    $input-border-radius-sm;

$form-select-padding-y-lg:        $input-padding-y-lg;
$form-select-padding-x-lg:        $input-padding-x-lg;
$form-select-font-size-lg:        $input-font-size-lg;
$form-select-border-radius-lg:    $input-border-radius-lg;

$form-select-transition:          $input-transition;

```

<h2 id="coreui-vs-bootstrap">CoreUI vs Bootstrap <a class="anchor-link" href="#coreui-vs-bootstrap" aria-label="Link to this section: CoreUI vs Bootstrap"></a></h2>
<p>While this Form Select component is fully compatible with Bootstrap and follows its core principles, CoreUI delivers a more complete solution for modern app development.</p>
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