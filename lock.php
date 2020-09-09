<!DOCTYPE html>
<html>
<head>
	<title>kunci div</title>
	<style type="text/css">
		.closer {
			float: right;
			width: 20px;
			height: 20px;
			border: 0;
			background-color: transparent;
		}

		.closer:hover {
			background-color: transparent;
			border: 0;
		}

		.empty {
			height: 30px;
			margin: 5px;
			background: #eee;
			border: 1px dashed #999;
		}

		.highlight {
			border: 1px solid red;
			background: #fff;
		}

		.highlight .item {
			opacity: 0.3;
		}

		.ui-draggable-dragging {
			z-index: 99;
			opacity: 1 !important;
			width: 378px;
		}
	</style>
</head>
<body>
	<div id="dragItems" class="source">
		<div class="item">Item 1</div>
		<div class="item">Item 2</div>
		<div class="item">Item 3</div>
		<div class="item">Item 4</div>
		<div class="item">Item 5</div>
	</div>
	<div id="sortItems" class="target">
	</div>
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>	
	<script type="text/javascript">
		<script type="text/javascript">
		$(function() {
			$("#sortItems").sortable({
				axis: "y",
				items: "> div",
				placeholder: "empty",
				dropOnEmpty: true,
				stop: function(e, ui) {
					var $it = ui.item;
					if ($it.find(".closer").length == 0) {
						var closeBtn = $("<span>", {
							class: "closer"
						});
						$it.append(closeBtn);
						closeBtn.button({
							icon: "ui-icon-close",
							label: "Close",
							showLabel: false
						}).click(function(ev) {
							console.log("[INFO]: Closing ", $it);
							$it.fadeTo(200, 0.0, function() {
								$it.remove();
								$("#sortItems").sortable("refresh");
							});
						});
					}
				}
			});

			$("#dragItems .item").draggable({
				connectToSortable: "#sortItems",
				revert: "invalid"
			});

			$("#sortItems").disableSelection();
		});
	</script>
</body>
</html>