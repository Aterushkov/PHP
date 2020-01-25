<?
function bbcode( $text ){

  $search = array(
    '[b]',
    '[/b]',

    '[i]',
    '[/i]',

    '[url=]',
    '[=name=]',
    '[/url]',
    '[audio]',
    '[/audio]',
    '[video]',
    '[/video]',

  );
  $replace = array(
    '<b>',
    '</b>',

    '<i>',
    '</i>',

    '<a target="_blank" href="',
    '">',
    '</a>',

    '<audio scr="',
    '" controls></audio>',

    '<video widht="400", height="400" scr="',
    '" controls></video>',

  );

  return str_replace($search,$replace,$text);

}


?>
