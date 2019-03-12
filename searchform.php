<form role="search" method="get" id="searchform" class="searchform align-middle" action="<?php echo home_url('/') ;?>">
				<div class="input-group  input-group-sm mb-3  "  style="margin: 16px 0px 0px 0px;">
					<input class="formcontrol offset-xl-4 col-xl-6 " type="text" value="" name="s" id="s" placeholder="<?php echo get_search_query(); ?>" />
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="submit"  id="searchsubmit" value="Search">Search</button>
					 </div>	
					
				</div>
</form>	