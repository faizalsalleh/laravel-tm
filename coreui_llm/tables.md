# Tables

Documentation and examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with Bootstrap.

## Overview

Due to the widespread use of `<table>` elements across third-party widgets like calendars and date pickers, CoreUI for Bootstrap's tables are **opt-in**. Add the base class `.table` to any `<table>`, then extend with our optional modifier classes or custom styles. All table styles are not inherited in Bootstrap, meaning any nested tables can be styled independent from the parent.

Using the most basic table markup, here's how `.table`-based tables look in Bootstrap.

<div class="docs-example">
  <table class="table">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div><div class="highlight"><pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">thead</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>#<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>First<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Last<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Handle<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;/</span><span class="nt">thead</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">tbody</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>1<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Mark<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Otto<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>@mdo<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>2<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Jacob<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Thornton<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>@fat<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>3<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">      <span class="p">&lt;</span><span class="nt">td</span> <span class="na">colspan</span><span class="o">=</span><span class="s">&#34;2&#34;</span><span class="p">&gt;</span>Larry the Bird<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>@twitter<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;/</span><span class="nt">tbody</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></span></span></code></pre></div>

## Variants

Use contextual classes to color tables, table rows or individual cells.

<div class="docs-example">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Class</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Default</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      
        <tr class="table-primary">
          <th scope="row">Primary</th>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr class="table-secondary">
          <th scope="row">Secondary</th>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr class="table-success">
          <th scope="row">Success</th>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr class="table-danger">
          <th scope="row">Danger</th>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr class="table-warning">
          <th scope="row">Warning</th>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr class="table-info">
          <th scope="row">Info</th>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr class="table-light">
          <th scope="row">Light</th>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr class="table-dark">
          <th scope="row">Dark</th>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
    </tbody>
  </table>
</div>

<div class="highlight"><pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="c">&lt;!-- On tables --&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-primary&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-secondary&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-success&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-danger&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-warning&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-info&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-light&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-dark&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">
</span></span><span class="line"><span class="cl"><span class="c">&lt;!-- On rows --&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-primary&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-secondary&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-success&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-danger&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-warning&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-info&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-light&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-dark&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">
</span></span><span class="line"><span class="cl"><span class="c">&lt;!-- On cells (`td` or `th`) --&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-primary&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-secondary&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-success&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-danger&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-warning&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-info&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-light&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-dark&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span></span></span></code></pre></div>


##### Conveying meaning to assistive technologies

Relying on color to convey meaning creates a visual cue that assistive technologies, like screen readers, cannot perceive. It&#39;s essential that any information represented by color is either apparent from the content itself (e.g., the visible text) or supplemented by alternative methods, such as extra text using the `.visually-hidden` class.




## Accented tables

### Striped rows

Use `.table-striped` to add zebra-striping to any table row within the `<tbody>`.

<div class="docs-example">
  <table class="table table-striped">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div><div class="highlight"><pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-striped&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  ...
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></span></span></code></pre></div>

### Striped columns

Use `.table-striped-columns` to add zebra-striping to any table column.

<div class="docs-example">
  <table class="table table-striped-columns">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div><div class="highlight"><pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-striped-columns&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  ...
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></span></span></code></pre></div>

These classes can also be added to table variants:

<div class="docs-example">
  <table class="table table-dark table-striped">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div><div class="highlight"><pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-dark table-striped&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  ...
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></span></span></code></pre></div>

<div class="docs-example">
  <table class="table table-dark table-striped-columns">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div><div class="highlight"><pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-dark table-striped-columns&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  ...
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></span></span></code></pre></div>

<div class="docs-example">
  <table class="table table-success table-striped">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div><div class="highlight"><pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-success table-striped&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  ...
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></span></span></code></pre></div>

<div class="docs-example">
  <table class="table table-success table-striped-columns">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div><div class="highlight"><pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-success table-striped-columns&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  ...
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></span></span></code></pre></div>

### Hoverable rows

Add `.table-hover` to enable a hover state on table rows within a `<tbody>`.

<div class="docs-example">
  <table class="table table-hover">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div><div class="highlight"><pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-hover&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  ...
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></span></span></code></pre></div>

<div class="docs-example">
  <table class="table table-dark table-hover">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div><div class="highlight"><pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-dark table-hover&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  ...
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></span></span></code></pre></div>

These hoverable rows can also be combined with the striped rows variant:

<div class="docs-example">
  <table class="table table-striped table-hover">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div><div class="highlight"><pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-striped table-hover&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  ...
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></span></span></code></pre></div>

### Active tables

Highlight a table row or cell by adding a `.table-active` class.

<div class="docs-example">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr class="table-active">
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2" class="table-active">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
</div>

```html
<table class="table">
  <thead>
    ...
  </thead>
  <tbody>
    <tr class="table-active">
      ...
    </tr>
    <tr>
      ...
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2" class="table-active">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
```

<div class="docs-example">
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr class="table-active">
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2" class="table-active">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
</div>

```html
<table class="table table-dark">
  <thead>
    ...
  </thead>
  <tbody>
    <tr class="table-active">
      ...
    </tr>
    <tr>
      ...
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2" class="table-active">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
```

## How do the variants and accented tables work?

For the accented tables ([striped rows](#striped-rows), [striped columns](#striped-columns), [hoverable rows](#hoverable-rows), and [active tables](#active-tables)), we used some techniques to make these effects work for all our [table variants](#variants):

- We start by setting the background of a table cell with the `--cui-table-bg` custom property. All table variants then set that custom property to colorize the table cells. This way, we don't get into trouble if semi-transparent colors are used as table backgrounds.
- Then we add a gradient on the table cells with `background-image: linear-gradient(var(--cui-table-accent-bg), var(--cui-table-accent-bg));` to layer on top of any specified `background-color`. Since `--cui-table-accent-bg` is transparent by default, we have an invisible transparent linear gradient by default.
- When either `.table-striped`, `.table-hover` or `.table-active` classes are added, the `--cui-table-accent-bg` is set to a semitransparent color to colorize the background.
- For each table variant, we generate a `--cui-table-accent-bg` color with the highest contrast depending on that color. For example, the accent color for `.table-primary` is darker while `.table-dark` has a lighter accent color.
- Text and border colors are generated the same way, and their colors are inherited by default.

Behind the scenes it looks like this:

```scss
@mixin table-variant($state, $background) {
  .table-#{$state} {
    $color: color-contrast(opaque($body-bg, $background));
    $hover-bg: color.mix($color, $background, math.percentage($table-hover-bg-factor));
    $striped-bg: color.mix($color, $background, math.percentage($table-striped-bg-factor));
    $active-bg: color.mix($color, $background, math.percentage($table-active-bg-factor));
    $table-border-color: color.mix($color, $background, math.percentage($table-border-factor));

    --#{$prefix}table-color: #{$color};
    --#{$prefix}table-bg: #{$background};
    --#{$prefix}table-border-color: #{$table-border-color};
    --#{$prefix}table-striped-bg: #{$striped-bg};
    --#{$prefix}table-striped-color: #{color-contrast($striped-bg)};
    --#{$prefix}table-active-bg: #{$active-bg};
    --#{$prefix}table-active-color: #{color-contrast($active-bg)};
    --#{$prefix}table-hover-bg: #{$hover-bg};
    --#{$prefix}table-hover-color: #{color-contrast($hover-bg)};

    color: var(--#{$prefix}table-color);
    border-color: var(--#{$prefix}table-border-color);
  }
}

```

## Table borders

### Bordered tables

Add `.table-bordered` for borders on all sides of the table and cells.

<div class="docs-example">
  <table class="table table-bordered">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div><div class="highlight"><pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-bordered&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  ...
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></span></span></code></pre></div>

[Border color utilities](/utilities/borders/#border-color) can be added to change colors:

<div class="docs-example">
  <table class="table table-bordered border-primary">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div><div class="highlight"><pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-bordered border-primary&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  ...
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></span></span></code></pre></div>

### Tables without borders

Add `.table-borderless` for a table without borders.

<div class="docs-example">
  <table class="table table-borderless">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div><div class="highlight"><pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-borderless&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  ...
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></span></span></code></pre></div>

<div class="docs-example">
  <table class="table table-dark table-borderless">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div><div class="highlight"><pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-dark table-borderless&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  ...
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></span></span></code></pre></div>

## Small tables

Add `.table-sm` to make any `.table` more compact by cutting all cell `padding` in half.

<div class="docs-example">
  <table class="table table-sm">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div><div class="highlight"><pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-sm&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  ...
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></span></span></code></pre></div>

<div class="docs-example">
  <table class="table table-dark table-sm">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div><div class="highlight"><pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-dark table-sm&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  ...
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></span></span></code></pre></div>

## Table group dividers

Add a thicker border, darker between table groups—`<thead>`, `<tbody>`, and `<tfoot>`—with `.table-group-divider`. Customize the color by changing the `border-top-color` (which we don't currently provide a utility class for at this time).

```html
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
```

## Vertical alignment

Table cells of `<thead>` are always vertical aligned to the bottom. Table cells in `<tbody>` inherit their alignment from `<table>` and are aligned to the top by default. Use the [vertical align](/utilities/vertical-align/) classes to re-align where needed.

<div class="docs-example">
  <div class="table-responsive">
    <table class="table align-middle">
      <thead>
        <tr>
          <th scope="col" class="w-25">Heading 1</th>
          <th scope="col" class="w-25">Heading 2</th>
          <th scope="col" class="w-25">Heading 3</th>
          <th scope="col" class="w-25">Heading 4</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
          <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
          <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
          <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
        </tr>
        <tr class="align-bottom">
          <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
          <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
          <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
          <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
        </tr>
        <tr>
          <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
          <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
          <td class="align-top">This cell is aligned to the top.</td>
          <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

```html
<div class="table-responsive">
  <table class="table align-middle">
    <thead>
      <tr>
        ...
      </tr>
    </thead>
    <tbody>
      <tr>
        ...
      </tr>
      <tr class="align-bottom">
        ...
      </tr>
      <tr>
        <td>...</td>
        <td>...</td>
        <td class="align-top">This cell is aligned to the top.</td>
        <td>...</td>
      </tr>
    </tbody>
  </table>
</div>
```

## Nesting

Border styles, active styles, and table variants are not inherited by nested tables.

<div class="docs-example">
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td colspan="4">
        <table class="table mb-0">
          <thead>
            <tr>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">A</th>
              <td>First</td>
              <td>Last</td>
            </tr>
            <tr>
              <th scope="row">B</th>
              <td>First</td>
              <td>Last</td>
            </tr>
            <tr>
              <th scope="row">C</th>
              <td>First</td>
              <td>Last</td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>

```html
<table class="table table-striped">
  <thead>
    ...
  </thead>
  <tbody>
    ...
    <tr>
      <td colspan="4">
        <table class="table mb-0">
          ...
        </table>
      </td>
    </tr>
    ...
  </tbody>
</table>
```

## How nesting works

To prevent _any_ styles from leaking to nested tables, we use the child combinator (`>`) selector in our CSS. Since we need to target all the `td`s and `th`s in the `thead`, `tbody`, and `tfoot`, our selector would look pretty long without it. As such, we use the rather odd looking `.table > :not(caption) > * > *` selector to target all `td`s and `th`s of the `.table`, but none of any potential nested tables.

Note that if you add `<tr>`s as direct children of a table, those `<tr>` will be wrapped in a `<tbody>` by default, thus making our selectors work as intended.

## Anatomy

### Table head

Similar to tables and dark tables, use the modifier classes `.table-light` or `.table-dark` to make `<thead>`s appear light or dark gray.

<div class="docs-example">
<table class="table">
  <thead class="table-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>

```html
<table class="table">
  <thead class="table-light">
    ...
  </thead>
  <tbody>
    ...
  </tbody>
</table>
```

<div class="docs-example">
<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>

```html
<table class="table">
  <thead class="table-dark">
    ...
  </thead>
  <tbody>
    ...
  </tbody>
</table>
```

### Table foot

<div class="docs-example">
<table class="table">
  <thead class="table-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td>Footer</td>
      <td>Footer</td>
      <td>Footer</td>
      <td>Footer</td>
    </tr>
  </tfoot>
</table>
</div>

```html
<table class="table">
  <thead>
    ...
  </thead>
  <tbody>
    ...
  </tbody>
  <tfoot>
    ...
  </tfoot>
</table>
```

### Captions

A `<caption>` functions like a heading for a table. It helps users with screen readers to find a table and understand what it's about and decide if they want to read it.

<div class="docs-example">
  <table class="table">
    <caption>List of users</caption>
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    

  </table>
</div>

```html
<table class="table table-sm">
  <caption>List of users</caption>
  <thead>
    ...
  </thead>
  <tbody>
    ...
  </tbody>
</table>
```

You can also put the `<caption>` on the top of the table with `.caption-top`.

```html
<table class="table caption-top">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
```

## Responsive tables

Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a `.table` with `.table-responsive`. Or, pick a maximum breakpoint with which to have a responsive table up to by using `.table-responsive{-sm|-md|-lg|-xl|-xxl}`.


##### Vertical clipping/truncation

Responsive tables make use of `overflow-y: hidden`, which clips off any content that goes beyond the bottom or top edges of the table. In particular, this can clip off dropdown menus and other third-party widgets.


### Always responsive

Across every breakpoint, use `.table-responsive` for horizontally scrolling tables.

<div class="docs-example">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

```html
<div class="table-responsive">
  <table class="table">
    ...
  </table>
</div>
```

### Breakpoint specific

Use `.table-responsive{-sm|-md|-lg|-xl|-xxl}` as needed to create responsive tables up to a particular breakpoint. From that breakpoint and up, the table will behave normally and not scroll horizontally.

**These tables may appear broken until their responsive styles apply at specific viewport widths.**




<div class="docs-example">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<div class="docs-example">
  <div class="table-responsive-sm">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<div class="docs-example">
  <div class="table-responsive-md">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<div class="docs-example">
  <div class="table-responsive-lg">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<div class="docs-example">
  <div class="table-responsive-xl">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<div class="docs-example">
  <div class="table-responsive-xxl">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<div class="highlight"><pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-responsive&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    ...
</span></span><span class="line"><span class="cl">  <span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-responsive-sm&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    ...
</span></span><span class="line"><span class="cl">  <span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-responsive-md&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    ...
</span></span><span class="line"><span class="cl">  <span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-responsive-lg&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    ...
</span></span><span class="line"><span class="cl">  <span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-responsive-xl&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    ...
</span></span><span class="line"><span class="cl">  <span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-responsive-xxl&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    ...
</span></span><span class="line"><span class="cl">  <span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></span></span></code></pre></div>

## Customization

### SASS variables

```scss
$table-cell-padding-y:        .5rem;
$table-cell-padding-x:        .5rem;
$table-cell-padding-y-sm:     .25rem;
$table-cell-padding-x-sm:     .25rem;

$table-cell-vertical-align:   top;

$table-color:                 var(--#{$prefix}emphasis-color);
$table-bg:                    var(--#{$prefix}body-bg);
$table-accent-bg:             transparent;

$table-th-font-weight:        null;

$table-striped-color:         $table-color;
$table-striped-bg-factor:     .05;
$table-striped-bg:            rgba(var(--#{$prefix}emphasis-color-rgb), $table-striped-bg-factor);

$table-active-color:          $table-color;
$table-active-bg-factor:      .1;
$table-active-bg:             rgba(var(--#{$prefix}emphasis-color-rgb), $table-active-bg-factor);

$table-hover-color:           $table-color;
$table-hover-bg-factor:       .075;
$table-hover-bg:              rgba(var(--#{$prefix}emphasis-color-rgb), $table-hover-bg-factor);

$table-border-factor:         .2;
$table-border-width:          var(--#{$prefix}border-width);
$table-border-color:          var(--#{$prefix}border-color);

$table-striped-order:         odd;
$table-striped-columns-order: even;

$table-group-separator-color: currentcolor;

$table-caption-color:         var(--#{$prefix}secondary-color);

$table-bg-scale:              -80%;

```


### SASS loop

```scss
$table-variants: (
  &#34;primary&#34;:    shift-color($primary, $table-bg-scale),
  &#34;secondary&#34;:  shift-color($secondary, $table-bg-scale),
  &#34;success&#34;:    shift-color($success, $table-bg-scale),
  &#34;info&#34;:       shift-color($info, $table-bg-scale),
  &#34;warning&#34;:    shift-color($warning, $table-bg-scale),
  &#34;danger&#34;:     shift-color($danger, $table-bg-scale),
  &#34;light&#34;:      $light,
  &#34;dark&#34;:       $dark,
);

```

### Customizing

- The factor variables (`$table-striped-bg-factor`, `$table-active-bg-factor` & `$table-hover-bg-factor`) are used to determine the contrast in table variants.
- Apart from the light & dark table variants, theme colors are lightened by the `$table-bg-scale` variable.