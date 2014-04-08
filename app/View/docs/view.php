@layout('layout.layout')
<div class="content">

<div class="row">

    @include('partial.docsMenu')

    <div class="small-9 columns">

        <h4>View, partials and Layout</h4>
        <p>
            There are three types of views in Oak Framework, regular views, partial view and a layout.
        </p>

<pre class="prettyprint">
app/View
    controllername/
    layout/
    partial/

</pre>

<h4>Create a layout</h4>
<p>Filename: View/Layout/layout.php</p>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html class="no-js">
    &lt;head>
    &lt;/head>
    &lt;body>
        @ include('partial.menu')

        {{ layout_content }}

        @ include('partial.footer')

    &lt;/body>
&lt;/html>

</pre>

<h4>Create the view</h4>
<p>Filename: View/{controllername}/{methodname}.php</p>
<pre class="prettyprint">
    @ layout('layout.layout')
    &lt;div class="content">
        This is view content
    &lt;/div>
</pre>

<h4>Create a partial</h4>
<p>
    Filename: View/partial/menu.php
</p>
<pre class="prettyprint">
    &lt;ul class="menu">
        &lt;li>&lt;a href="/">Start&lt;/a>&lt;/li>
        &lt;li>&lt;a href="/docs">Documentation&lt;a>&lt;/li>
        &lt;li>&lt;a href="/about">About&lt;/a>&lt;/li>
    &lt;/ul>
</pre>


</div>
</div>

</div>
