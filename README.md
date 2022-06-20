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
