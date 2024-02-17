<?php
namespace Rheebros;

interface Routes
{
  public function getRoutes(): array;
  public function getAuthentication(): \Rheebros\Authentication;
  public function checkPermission($permission): bool;
}

// 클래스에서 Routes 인터페이스를 사용한다면, 인터페이스에 명시된 메소드는 필수로 사용해야됨.
// 만약 위의 세 가지 중에 한 가지 라도 사용하지 않는다면 에러 발생.