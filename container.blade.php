<div class="col-12 px-0 px-sm-2 col-md-8 photos_slider">
	<div class="photoslider">
		<div class="photoslider_inner">
			<div class="photoslider_items_holder">
				@foreach($photos as $photo)
						<?php
						if ($loop->index == 0) $someClass = " margin_left_phone ";
						else if ($loop->index == 1) $someClass = " left0 active ";
						else $someClass = "";
						?>
					<div class="photoslider-item {{$someClass}}" number="{{$loop->index}}">
						<div class="photoslider-image" style="background-image: url({{$photo->url}});"></div>
						<div class="photoslider-item-title-and-text">
							<span>{{$photo->title}}</span><br>
							<span class="d-none">{{$photo->description}}</span>
						</div>
					</div>
				@endforeach
				<div class="btn-photoslider-prev phone_mode">
					<div>
						<svg viewBox="0 0 256 512">
							<path d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"/>
						</svg>
					</div>
				</div>
				<div class="btn-photoslider-next phone_mode">
					<div>
						<svg viewBox="0 0 256 512">
							<path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"/>
						</svg>
					</div>
				</div>
			</div>
		</div>
		<div class="photoslider_miniitem_set ">
			<div class="btn-photoslider-prev-mini">
				<div>
					<svg viewBox="0 0 256 512">
						<path d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"/>
					</svg>
				</div>
			</div>
			<div class="photoslider_miniitems_wrapper">
				<div class="photoslider_miniitems_holder">
					<?php
					$photos = array_slice($photos, 1, count($photos) - 2);
					?>
					@foreach($photos as $photo)
							<?php
							$someClass = $loop->index == 0 ? "active_photoslider_mini_item" : "";
							?>
						<div class="photoslider-mini-item {{$someClass}}" number="{{$loop->index+1}}">
							<div style="background-image: url({{$photo->url}});"></div>
						</div>
					@endforeach
				</div>
			</div>
			<div class="btn-photoslider-next-mini">
				<div>
					<svg viewBox="0 0 256 512">
						<path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"/>
					</svg>
				</div>
			</div>
		</div>
		<div class="photoslider_fullscreen" style="display:none;">
			<div class="fullscreen_slide_holder"></div>
			<div class="btn-photoslider-prev btn-photoslider-fullscr phone_mode">
				<div>
					<svg viewBox="0 0 256 512">
						<path d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"/>
					</svg>
				</div>
			</div>
			<div class="btn-photoslider-next btn-photoslider-fullscr phone_mode">
				<div>
					<svg viewBox="0 0 256 512">
						<path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"/>
					</svg>
				</div>
			</div>
		</div>
	</div>
</div>