{include file='common/header.tpl'}

<script type="text/javascript" src="../../javascript/searchUser.js"></script>
<div class="mid-container">
	<div class="row">
		<div id="breadcrumb" class="col-xs-12">
			<ol class="breadcrumb pull-left">
				<li><a href="{$BASE_URL}pages/user/visaopessoal.php">Visão Pessoal</a></li>

			</ol>
			<div id="social" class="pull-right">
		      <!--	<a href="#"><i class="fa fa-google-plus"></i></a>
		        <a href="#"><i class="fa fa-facebook"></i></a>
		        <a href="#"><i class="fa fa-twitter"></i></a>
		        <a href="#"><i class="fa fa-linkedin"></i></a>
		        <a href="#"><i class="fa fa-youtube"></i></a>-->
		    </div>
		</div>
	</div>
	<H2 class="text-center">Pesquisa de users</H2>
	<div id="messages" class="container-fluid">
		<div class="row" id="test">
			<div class="col-sm-6 col-sm-offset-3">
				<form class="" id="searchForm" method="get">
					<div class="form-group">
						<input class="form-control" type="text" id="usersearch" name="usersearch" onfocus="this.value = this.value" autofocus="autofocus">
					</div>
					<input type="submit" hidden="true">
				</form>
				<div id="results">
					<br>
				</div>
			</div>
		</div>
	</div>
</div>

{include file='common/footer.tpl'}