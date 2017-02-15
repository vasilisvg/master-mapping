<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mapping</title>
	<link rel="stylesheet" href="https://fonts.typotheque.com/WF-023273-009070.css" />
	<link rel="stylesheet" href="css.css">
<style>
<?php
$details = "details[open] ";
$newdetails = "details[open] ";
while ($d < 6) {
	$colour = mt_rand(0,259);
	$sat = mt_rand(50,87);
	$light = mt_rand(65,92);

	echo "$newdetails{
	box-shadow: inset calc(.3em - 1px) 0 0 white, inset .3em 0 0 hsla($colour,$sat%,$light%,1);
}\n";
	$newdetails = $newdetails . $details;
	$d++;
}

    ?>
</style>
</head>
<body>
<?php //include('mapping.php'); ?>
<details open>
		<summary>Quality</summary>
		<details>
			<summary>Sources</summary>
			<details>
				<summary>Management</summary>
				<details>
					<summary>Zotero</summary>
				</details>
				<details>
					<summary>Wallabag</summary>
				</details>
				<details>
					<summary>Pinboard</summary>
				</details>
			</details>
			<details>
				<summary>People</summary>
				<details>
					<summary>To talk to</summary>
				</details>
				<details>
					<summary>To study</summary>
				</details>
			</details>
			<details>
				<summary>Publications</summary>
				<details>
					<summary>Physical</summary>
				</details>
				<details>
					<summary>Online</summary>
				</details>
			</details>
		</details>
		<details open>
			<summary>The need to use things</summary>
			<details>
				<summary>what makes a thing good?</summary>
				<details>
					<summary>Dogma</summary>
				</details>
				<details>
					<summary>It’s useful</summary>
				</details>
				<details>
					<summary>There are different layers for different contexts</summary>
				</details>
				<details>
					<summary>I can personalise it</summary>
				</details>
				<details>
					<summary>There are handy options </summary>
				</details>
				<details>
					<summary>Fun</summary>
				</details>
				<details>
					<summary>Nice</summary>
				</details>
				<details>
					<summary>Easy to use</summary>
				</details>
				<details>
					<summary>Usable</summary>
				</details>
				<details>
					<summary>It works</summary>
				</details>
				<details>
					<summary>It’s adjustable to my needs</summary>
				</details>
			</details>
			<details>
				<summary><a href="https://my.mindnode.com/ZkNpqy2pm4UWcixVB7UMncYvM9RaALKfy42crP8Z#205.4,108.3,2">Are there any restrictions?</a></summary>
			</details>
			<details>
				<summary>Reasons to use things</summary>
				<details>
					<summary>I need it</summary>
				</details>
				<details>
					<summary>I want it</summary>
				</details>
				<details>
					<summary>I have to</summary>
				</details>
			</details>
		</details>
		<details>
			<summary>Deliverables</summary>
			<details>
				<summary>Educational material</summary>
				<details>
					<summary>Workshops</summary>
				</details>
				<details>
					<summary>Integration into existing courses</summary>
				</details>
			</details>
			<details>
				<summary>Works of art</summary>
			</details>
		</details>
		<details open>
			<summary>The urge to create things</summary>
			<details>
				<summary>are there any restrictions</summary>
				<details>
					<summary>technology</summary>
				</details>
				<details>
					<summary>Ambition</summary>
				</details>
				<details>
					<summary>Talent</summary>
				</details>
				<details>
					<summary>Time</summary>
				</details>
				<details>
					<summary>Team</summary>
				</details>
				<details>
					<summary>Money</summary>
				</details>
			</details>
			<details>
				<summary>reasons to make things</summary>
				<details>
					<summary>Improve things</summary>
					<details>
						<summary>Astrid</summary>
					</details>
					<details>
						<summary>Niko</summary>
					</details>
					<details>
						<summary>Marrije</summary>
					</details>
				</details>
				<details>
					<summary>Somebody needs it</summary>
				</details>
				<details>
					<summary>I like solving complex problems</summary>
				</details>
				<details>
					<summary>I want to</summary>
					<details>
						<summary>To earn a living</summary>
					</details>
					<details>
						<summary>to become rich/famous</summary>
						<details>
							<summary>Striping (https://vasilis.nl/nerd/striping-or/)</summary>
						</details>
					</details>
					<details>
						<summary>For fun</summary>
					</details>
				</details>
				<details>
					<summary>I like making things</summary>
				</details>
				<details>
					<summary>Somebody want it</summary>
				</details>
			</details>
			<details>
				<summary>what makes a thing good</summary>
				<details>
					<summary>It works</summary>
				</details>
				<details>
					<summary>it fits within a set of rules/principles</summary>
				</details>
				<details>
					<summary>It makes me happy</summary>
				</details>
				<details>
					<summary>Client is* content*</summary>
				</details>
				<details>
					<summary>Users are satisfied</summary>
				</details>
				<details>
					<summary>It’s beautiful</summary>
				</details>
				<details>
					<summary>It brings in money</summary>
				</details>
				<details>
					<summary>It’s original</summary>
				</details>
				<details>
					<summary>It’s innovative</summary>
				</details>
				<details>
					<summary>It’s visually pleasing</summary>
				</details>
				<details>
					<summary>It’s spectacular</summary>
				</details>
				<details>
					<summary>It’s consistent</summary>
				</details>
				<details>
					<summary>*It’s an improvement*</summary>
				</details>
			</details>
		</details>
	</details>
<script src="js.js"></script>
</body>
</html>
