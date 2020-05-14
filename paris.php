<?php if(!isset($_SESSION['permission']) || $_SESSION['permission'] < 1) : ?>
	<h1>Page access is forbidden!</h1>
<?php else : ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">City Name</th>
					<th scope="col">Country Name</th>
					<th scope="col">Size of the City</th>
					<th scope="col">Population of the City</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 0; ?>
					<?php $i++; ?>
					<tr>
						<th scope="row"><?=$i ?></th>
						<td>Paris</td>
						<td>France</td>
						<td>105.4 km²</td>
						<td> 2.148 million</td>
					</tr>
			</tbody>
		</table>
	<?php endif; ?>
	</div>
	<button type="submit" class="btn btn-primary" name="listParis">Paris</button>
</form>
