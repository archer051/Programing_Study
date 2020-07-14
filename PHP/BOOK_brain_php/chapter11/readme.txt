이 버전은 일부러 버그와 문제점을 많이 만들어둔 게시판입니다.

기본적으로 최근 버전에서는 에러가 발생할 수 밖에 없도록 되어 있습니다.

그 이유는 최신 PHP 설정은 register_globals=off 로 되어 있기 때문입니다.

php.ini 파일을 찾아서 register_globals=on 으로 변경하지 않으면

이 게시판은 제대로 동작하지 않습니다.

register_globals=off인 경우는 register_globals_off_version 디렉토리의

소스를 사용하시면 됩니다.