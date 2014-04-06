<ul class="primaryMenu">
    <li <?php echo ($this->requestUri == '') ? "class='active'" : "";?>><a href="/">Start</a></li>
    <li <?php echo ($this->requestUri == 'docs') ? "class='active'" : "";?>><a href="/docs">Documentation</a></li>
    <li <?php echo ($this->requestUri == 'about') ? "class='active'" : "" ;?>><a href="/about">About</a></li>
</ul>
