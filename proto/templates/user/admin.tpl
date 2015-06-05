{include file='common/header.tpl'}

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/justified-gallery/jquery.justifiedGallery.min.js"></script>
<script src="plugins/tinymce/tinymce.min.js"></script>
<script src="plugins/tinymce/jquery.tinymce.min.js"></script>
<!-- All functions for this theme + document.ready processing -->
<script src="js/devoops.js"></script>


<br><br><br>
<div id="dashboard-header" class="row">
	<div class="col-xs-12 col-sm-8 col-md-3" style="text-align:center;">
		<h3>Admin Page Overview</h3>
	</div>
	<div class="col-xs-12 col-sm-4 col-md-5" style="margin:0 auto; text-align: left; text-align:center;">
		<table class="table table-bordered">
			<tr>
				<th><i class="fa fa-user">Users Online</i></th>
				<th>3</th>
			</tr>
			<tr>
				<th><i class="fa fa-users">Registed Users</i></th>
				<th>14</th>
			</tr>
		</table>
	</div>

</div>
<div class="container">
	<div class="col-xs-11 col-sm-8 col-md-10">
		<div class="row infos">
			<div class="box-content">
				<h3> Recent activity </h3>
				<table class="table table-hover">
					<thead>
						<tr >
							<th><i class="fa fa-clock-o  fa-spin"></i></th>
							<th>Name</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>seconds ago</td>
							<td>User Register</td>
							<td>A new <a onclick="$('#ajax-content').empty();LoadAjaxContent('ajax/user1.html')" href="#">user</a> has registered by the name of "Pim"</td>
						</tr>
						<tr>
							<td>1 hour ago</td>
							<td>New Project</td>
							<td>A new project by the name "Cgra-1" has been created</td>
						</tr>
						<tr>
							<td>3 days ago</td>
							<td>Project Deleted</td>
							<td>The project "LBAW-22" has just been deleted</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
{include file='common/footer.tpl'}
