<div class="row">    
	<div class="span12">
		<h1><?php echo $item['title'];?></h1>
		<h4><?php echo $item['date'];?></h4>
		<p><?php echo $item['text'];?></p>
		<a href="edit?id=<?php echo $item['item_id'];?>" class="btn">Редактировать</a>
		<a href="delete?id=<?php echo $item['item_id'];?>" class="btn">Удалить</a>
		<div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'muhahabr'; // required: replace example with your forum shortname
			
            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
	</div>
</div>