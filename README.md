# MediaInput
Stylize html with input tags

## Usage

    $tags = array(new TagImage("image"),new TagYoutube());
    $media = new MediaInput($tags);
    
    $input = "[IMG=https://i.hizliresim.com/nj0wqe4.jpg]";
    $input = $input . "[YT=https://www.youtube.com/watch?v=8pm_KoguqPM]";
    $media->InputFormat($input);
	

## Output
![](https://i.hizliresim.com/5b0wdhg.PNG)


## Creating Tag

Creating simple tag to embed spotify playlists

TagSpotify.php

	class TagSpotify extends Tag implements ITag
	{

	}
	
Assign variables and implement methods(You can customize tags by adding parameters or override functions check TagYoutube.php for more info)

	class TagSpotify extends Tag implements ITag
	{
	    public function __construct()
	    {
		$this->tag = "SPOTIFY";
		$this->tagName = "Spotify";
		$this->tagText = '<iframe src=""></iframe>';
		$this->index = 14;
	    }
	}
	
 
 
 ## Usage
 
	$media = new MediaInput(array(new TagSpotify()));

	$media->InputFormat("[SPOTIFY=https://open.spotify.com/embed/playlist/5a2OuIJ1kEttA8X3PaewlI?utm_source=oembed]);
	
## Output

![](https://i.hizliresim.com/53yns4g.PNG)
