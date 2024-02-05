<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Home｜Nutrition Calc.</title>
<meta name="description" itemprop="description" content="Home page">
<meta name="keywords" itemprop="keywords" content="home">
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="md:flex md:flex-col w-full min-h-[100vh] sm:relative bg-amber-50 text-green-700">
	<header class="fixed top-0" id="header">
		<div class="max-w-7xl mx-auto px-4 sm:px-6">
			<div class="py-4">
				<p class="text-[6vw] md:text-[3vw]">
					Nutrition<br>Calc.
				</p>
			</div>
		</div>
	</header>
	<main class="md:grow md:relative">
		@auth
		<div class="md:flex md:absolute w-full md:top-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2">
			<div class="title-area w-full md:w-1/2 md:relative">
				<div class="md:absolute md:top-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2 mb-5">
					<p class="text-[3vw] md:text-xl text-center ">こんにちは、{{ Auth::user()->name }}さん</p>
					<p class="text-[5vw] md:text-2xl text-center">今日は何をしますか？</p>
				</div>
			</div>
			<!-- title-area -->
			<div class="menu-area md:w-1/2 md:text-center md:relative md:inline-block">
				<div class="menu-area_list text-center md:text-left md:absolute md:top-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2">
					<ul>
						<li class="mb-4"><a href="{{ route('order.create')}}">今週買った食材を登録する</a></li>
						<li class="mb-4"><a href="{{ route('order.index')}}">今週買った食材を見る</a></li>
						<li class="mb-4"><a href="{{ route('calc')}}">栄養を計算する</a></li>
						<li class="mb-4"><a href="{{ route('foods.index')}}">食材の一覧を見る</a></li>
						<li class="mb-4"><a href="{{ route('user.show', ['user' => Auth::user()]) }}">登録情報を変更する</a></li>
						<li>
							<form action="{{ route('logout') }}" method="post">
								@csrf
								<button>ログアウトする</button>
							</form>
						</li>
					</ul>
				</div>
				<!-- menu-area_list -->
			</div>
			<!-- menu-area -->
		</div>
		@else
		<div class="title-area w-full">
			<div class="md:absolute md:top-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2">
				<p class="text-[3vw] md:text-xl text-center mb-2">ようこそ</p>
				<p class="text-[3vw] md:text-xl text-center">
					<a href="{{ route('login') }}">ログイン</a>
				</p>
				<p class="text-[3vw] md:text-xl text-center">
					<a href="{{ route('register') }}">新規登録</a>
				</p>
			</div>
		</div>
		<!-- title-area -->
		@endauth
	</main>
	<footer class="bottom-0 fixed">
		<div class="max-w-7ml mx-atuo px-4 sm:px-6">
			<div class="py-4 text-left">
				<p class="text-center text-[3vw] md:text-base">Copyright© Hal40n All rights reserved.
			
			</div>
		</div>
	</footer>
	<script>
        document.addEventListener('DOMContentLoaded', function() {
            var headerHeight = document.getElementById('header').offsetHeight;
            document.querySelector('main').style.marginTop = headerHeight + 'px';
        });
		</script>
</body>
</html>