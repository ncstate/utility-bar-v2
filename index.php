<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Utility Prototype</title>
	<link href="css/main.css" type="text/css" rel="stylesheet" media="all" />
</head>

<body>
	
	<div class="ncstate-brand-bar" aria-label="NC State Brand Utility Bar">
		
		<div class="ncstate-brand-bar-tools">
			<div class="ncstate-brand-bar-wrapper ncstate-brand-bar-wrapper-primary" id="ncstate-brand-bar-wrapper-primary">
			
				<div class="ncstate-brand-bar-home">
					<a href="http://www.ncsu.edu">NC State Home</a>
				</div>

				<div class="ncstate-brand-bar-options">

					<div class="ncstate-brand-bar-toggle">
						<a id="ncstate-brand-bar-toggle-link" href="#">Show/Hide Quicklinks</a>
					</div>
				
					<div class="ncstate-brand-bar-search" role="search" aria-label="Search www.ncsu.edu">
						
						<form action="http://www.ncsu.edu/search" name="navsearchform" class="ncstate-brand-bar-search-form">
	        
							<input id="navcx" name="cx" type="hidden" value="' + _bb.googleCustomSearchCode + '">
						    <input id="navcof" name="cof" type="hidden" value="FORID:11">
						    
							<input class="ncstate-brand-bar-search-field" id="search-input" name="q" type="search"
								placeholder="search ncsu.edu" aria-label="search ncsu.edu">
						 	<input type="submit" id="search-submit" name="search-submit" value="search"
								class="ncstate-brand-bar-search-submit">
				
						</form>
						
					</div>
					
				</div><!-- end options -->
		
			</div><!-- end util wrapper -->
		</div><!-- end tools -->
		
		<div class="ncstate-brand-bar-links is-hidden">
		
			<div class="ncstate-brand-bar-wrapper">
				
				<ul class="ncstate-brand-bar-primary-util">
					<li class="ncstate-brand-bar-primary-util ncstate-brand-bar-directory"><a href="http://www.ncsu.edu/directory/" id="ncstate-brand-bar-first-link">Campus Directory</a></li>
					<li class="ncstate-brand-bar-primary-util ncstate-brand-bar-mypack"><a href="http://mypack.ncsu.edu/">MyPack Portal</a></li>
					<li class="ncstate-brand-bar-primary-util ncstate-brand-bar-map"><a href="http://www.ncsu.edu/campus_map/">Campus Map</a></li>
					<li class="ncstate-brand-bar-primary-util ncstate-brand-bar-calendar"><a href="http://www.ncsu.edu/calendar/">Calendar</a></li>
				</ul>
				
				<div class="ncstate-brand-bar-sec-util">	
					<dl>
						<dt>Campus Resources</dt>
						<dd>
							<ul>
								<li><a href="http://housing.ncsu.edu/">University Housing</a></li>
								<li><a href="http://www.ncsudining.com/">Univeristy Dining</a></li>
								<li><a href="http://shop.bookstore.ncsu.edu/">Bookstores</a></li>
								<li><a href="http://ncsu.transloc.com/">Wolfline Buses</a></li>
								<li><a href="http://www.lib.ncsu.edu/">Libraries</a></li>
							</ul>
						</dd>
					</dl>
					
					<dl>
						<dt>Academic Resources</dt>
						<dd>
							<ul>
								<li><a href="http://admissions.ncsu.edu/">Admissions</a></li>
								<li><a href="http://www.ncsu.edu/academics/departments-a-z/">Academic Departments</a></li>
								<li><a href="https://wolfware.ncsu.edu/">Wolfware</a></li>
								<li><a href="http://oia.ncsu.edu/">International Affairs</a></li>
								<li><a href="http://distance.ncsu.edu/">Distance Education</a></li>
							</ul>
						</dd>
					</dl>
					
					<dl>
						<dt>Other Resources</dt>
						<dd>
							<ul>
								<li><a href="http://www.fis.ncsu.edu/cashier/">Cashier's Office</a></li>
								<li><a href="http://www.ncsu.edu/registrar/">Registration and Records</a></li>
								<li><a href="http://www7.acs.ncsu.edu/financial_aid/">Financial Aid &amp; Scholarships</a></li>
								<li><a href="http://www.ncsu.edu/outreach/">Outreach and Engagement</a></li>
								<li><a href="http://help.ncsu.edu/">IT Help Desk</a></li>
							</ul>
						</dd>
					</dl>
					
					<dl>
						<dt>&nbsp;</dt>
						<dd>
							<ul>
								<li><a href="http://giving.ncsu.edu/">Giving</a></li>
								<li><a href="http://news.ncsu.edu/">NC State News</a></li>
								<li><a href="http://www.ncsu.edu/grad/">Graduate School</a></li>
								<li><a href="http://gmail.ncsu.edu/">Gmail Access</a></li>
								<li><a href="#" title="Social Media Website Coming Soon">Social Media</a></li>
							</ul>
						</dd>
					</dl>
				</div>
				
			</div>
			
		</div>
	
	</div><!-- end util -->
	
	<script src="js/main.js"></script>
	
</body>
</html>