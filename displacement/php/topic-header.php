<?php 

echo "
  <header class='topic-header'>
    <section id='header-burger'>
      <div>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </section>
    <div class='site-logo'>
      <a href='/input-physics/home/index.php'>Input Physics</a>
    </div>
    <nav>
      <ul>
        <li><a id='header-ex-btn'>Examples</a></li>
        <li><a id='header-calc-btn' data-toggle='modal' data-target='#calculator-modal'>Calculator</a></li>
        <li><a id='header-convert-btn'>Conversions</a></li>
      </ul>
    </nav>
    <button type='button' id='header-search-btn'>
      <i class='fa fa-search'></i>
    </button>
    <section id='header-search-wrap'>
      <div>
        <input type='text' name='search-value' placeholder='Search'>
      </div>
      <button type='button'>
        <i class='fa fa-times'></i>
      </button>
    </section>
  </header>
";