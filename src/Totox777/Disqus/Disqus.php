<?php namespace Totox777\Disqus;

class Disqus {

    private $disqus_shortname;

    public function __construct($disqus_shortname)
    {
        $this->disqus_shortname = $disqus_shortname;
    }

    public function getHtml()
    {
        return "<div id='disqus_thread'></div>
        <script type='text/javascript'>
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = '$this->disqus_shortname'; // Required - Replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href='http://disqus.com/?ref_noscript'>comments powered by Disqus.</a></noscript>
        <a href='http://disqus.com' class='dsq-brlink'>
            blog comments powered by <span class='logo-disqus'>Disqus</span>
        </a>";
    }

}