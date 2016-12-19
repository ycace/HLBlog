{% extends "_layouts/default.html" %}

{% block content %}
<div class="post">
	<header class="post-header">
		<h1 class="post-title">{{ blog.title }} {% if blog.top != 0 %}<span class="top">[置顶]</span>{% endif %}</h1>
		<p class="post-meta">{{ blog.date | date('Y-m-d') }}{% if blog.author %} • {{ blog.author }}{% endif %}{% if blog.keywords %} • {{ blog.keywords | join(',') }}{% endif %}</p>
	</header>
	<article class="post-content">
		{{ blog.content | raw }}
	</article>

	{% if site.disqus %}
	<div class="post-content">
		<div id="disqus_thread"></div>
		<script>
var disqus_config = function () {
	this.page.url = location.href;
	this.page.identifier = '{{ blog.blogId }}';
};
(function() {
	var d = document, s = d.createElement('script');
	s.src = '//{{ site.disqus }}.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	</div>
	{% elseif site.duoshuo %}
	<div class="post-content">
		<!-- 多说评论框 start -->
		<div class="ds-thread" data-thread-key="{{ blog.blogId }}" data-title="{{ blog.title }}" data-url=""></div>
		<script type="text/javascript">
document.getElementsByClassName("ds-thread")[0].setAttribute('data-url', location.href);
		</script>
		<!-- 多说评论框 end -->
		<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
		<script type="text/javascript">
var duoshuoQuery = {short_name:"{{ site.duoshuo }}"};
(function() {
	var ds = document.createElement('script');
	ds.type = 'text/javascript';ds.async = true;
	ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
	ds.charset = 'UTF-8';
	(document.getElementsByTagName('head')[0] 
	 || document.getElementsByTagName('body')[0]).appendChild(ds);
})();
		</script>
		<!-- 多说公共JS代码 end -->
	</div>
	{% endif %}
</div>
{% endblock %}
