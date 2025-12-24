<!-- For a hamburger for mobile -->


<button id="menu-toggle" class="mobile-toggle">☰ Menu</button>
<nav id="mobile-nav" class="main-nav">
  <button id="menu-close" class="mobile-close">✕ Close</button>
  <ul id="accordion" class="accordion">
    <li>
      <div class="link-noarrow"><i class="fa fa-database"></i><a href="/">Home</a><i class="fa fa-chevron-down"></i>
      </div>
    </li>
    <li>
      <div class="link">
        <i class="fa fa-database"></i>Publications <i class="fa fa-chevron-down toggle-icon"></i>
      </div>

      <ul class="submenu">
        <li><a href="/books">Books</a></li>
        <li><a href="/broadsides">Broadsides</a></li>
        <li><a href="/ephemera">Ephemera</a></li>
      </ul>
    </li>
    <li>
      <div class="link">
        <i class="fa fa-database"></i>About <i class="fa fa-chevron-down toggle-icon"></i>
      </div>
      <ul class="submenu">
        <li>
          <a href="/about ">About the Press</a>
        </li>
        <li>
          <a href="/about-the-proprietor ">Sandy Tilcock, Proprietor</a>
        </li>
      </ul>
    </li>
    <li>
      <div class="link">
        <i class="fa fa-database"></i>Commissions <i class="fa fa-chevron-down toggle-icon"></i>
      </div>
      <ul class="submenu">
        <li>
          <a href="/design ">Design</a>
        </li>
        <li>
          <a href="/realization ">Realization</a>
        </li>
        <li>
          <a href="/publishing-support ">Publishing Support</a>
        </li>
      </ul>
    </li>
    <li>
      <div class="link-noarrow"><i class="fa fa-database"></i><a href="/impressions">Impressions</a><i
          class="fa fa-chevron-down"></i></div>
    </li>
    <li>
      <div class="link-noarrow"><i class="fa fa-database"></i><a href="/contact">Contact</a><i
          class="fa fa-chevron-down"></i></div>
    </li>
    <li>
      <div class="link-noarrow"><i class="fa fa-database"></i><a href="/cart">Cart</a><i class="fa fa-chevron-down"></i>
      </div>
    </li>
  </ul>
</nav>

<!--
🧠 Notes for Scalability
You can enhance accessibility by adding ARIA attributes to the toggle and nav.

Consider animating the .submenu with CSS transitions for smoother UX.

If you're using a framework or CMS, you might want to namespace your classes to avoid conflicts.
-->