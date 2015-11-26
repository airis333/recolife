@extends('m.frame')

@section('head')
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="content-script-type" content="text/javascript">
<meta name="description" content="節約方法を説明します。">
<meta property="og:title" content="おすすめ節約術">
<meta property="og:type" content="article">
<meta property="og:url" content="http://recolife.com">
<meta property="og:image" content="#">
<meta property="og:description" content="節約方法を説明します。">
<meta property="og:site_name" content="おすすめ節約術">
<meta property="fb:app_id" content="#">
<meta name="keywords" content="404,おすすめ,節約,生活,電気,電力自由化">
<link rel="stylesheet" href="http://recolife.com/m/css/common.css" media="all">
<title>404エラーページ | おすすめ節約生活</title>
@stop

@section('contents')
<div class="error_text" style="text-align:center">
	<h2>ページが見つかりません。</h2>
	<div style="margin-bottom:20px">
		<p>{{ $reason }}</p>
		<p>古いページは削除されている可能性があります。</p>
	</div>
	<div class="jump_top">
		<a href="http://recolife.com/">TOPに戻る</a>
	</div>
</div>
@stop