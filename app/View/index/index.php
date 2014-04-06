@layout('layout.layout')

<div class="welcome">
    <h2>Welcome to OakFramework</h2>
    <p>
        OakFramwork is a lightweight framework<br /> built in hack and runs on HHVM by Facebook.
    </p>
    <a href="/about" class="button">Read more</a>
</div>

<div class="content small-12">
    <h2><?php echo $this->headline;?></h2>
    <p>
        This is a framework built in <a href="http://hacklang.org">Hack</a>. Right now there isn't much to see here!

    </p>
    <p>
        For now you can check out Oak at <a href="https://github.com/andene/oak/tree/develop">GitHub</a>. And feel free to tell me what you think about it!
    </p>
</div>
