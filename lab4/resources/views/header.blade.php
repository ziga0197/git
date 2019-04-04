<div id="header">
	<div class="header-top">
		
	</div> <!-- .header-top -->
	<div class="header-body">
		<div class="header-bottom" style="background-color: green;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{ route('trang-chu') }}" style="background-color: green;">Trang chủ</a></li>
						<li><a href="{{ route('signin') }}">Đăng kí</a></li>
						<li><a >Loại sản phẩm</a>
							<ul class="sub-menu">
								@foreach($loai_sp as $loai)
								<li><a href="{{ route('loaisanpham',$loai->id) }}">{{$loai->name}}</a></li>
								@endforeach
							</ul>
						</li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->