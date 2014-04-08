@layout('layout.layout')

<div class="welcome">
    <h2>Welcome to OakFramework</h2>
    <p>
        OakFramework is a lightweight framework<br /> built in hack and runs on HHVM by Facebook.
    </p>
    <a href="/about" class="button">Read more</a>
</div>

<div class="content small-12">
    <h2><?php echo $this->headline;?></h2>
    <p>
        This is a framework built in <a href="http://hacklang.org">Hack</a>. Right now there isn't much to see here!

    </p>
    <p>
        For now you can check out Oak at <a href="https://github.com/andene/oak/">GitHub</a> or at <a href="https://packagist.org/packages/oak/oak">Packagist</a>. And feel free to tell me what you think about it!
    </p>


    <h2>Install Oak Framework</h2>
    <p>
        Oak is built in <a href="http://hacklang.org">Hack</a> and requires HHVM. Before you use Oak you must make sure to have a machine that runs Hack up and running.
    </p>
    <p>
        I can recommend <a href="http://fideloper.com/hhvm-nginx-laravel">this guide</a> to get started with HHVM and Hack.
        There's also alot of information at the offial <a href="http://docs.hhvm.com/manual/en/install.linux.ubuntu.php">HHVM site</a>
    </p>
    <p>
        When you have your HHVM machine up and running you can easily install Oak by using composer.
    </p>
    <code>
        composer create-project oak/oak
    </code>
</div>
