## Image alt-text injection based on filename

The day before putting this on Github, I was working on a project where alt-text wasn't available to be placed on images.

I had wrote a small script that targeted SPECIFIC images and injected alt-text into each image respectively.

One of my contacts wondered if there was a way to do this for all images without having to specify each image individually.

I didn't think it was possible at first. But in thinking about it further, I came up with an idea.

Basically, what I'm doing here is targeting all the images located in index.php and using the text inside the src="" as the alt-text.

I've also attached a few regular expressions that remove the dashes, forward slashes, and filename extension to prettify the alt-text