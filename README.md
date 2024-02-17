# ASSI PLAZA HR 웹사이트
<img src=README_img/home.png>

## 📖 프로젝트 소개

- HR 부서에서는 매년 직원이 의무적으로 받아야하는 교육을 진행해야되는데, 이를 새로운 사람이 올 때마다 HR 매니저님이 지점을 방문해서 실시해야 되는 불편함이 있었습니다.
- ASSI PLAZA의 모든 직원들이 PC에서 PPT로 교육 자료를 열람할 수 있으며 교육 후에 시험을 볼 수 있습니다. 그리고 HR 매니저가 시험에 대한 결과를 데이터베이스에 저장해서 관리할 수 있습니다.

## 📌프로젝트 요구 사항

### 1️⃣기본기능 ✅

- 회원가입 / 회원탈퇴 ✅
- 로그인 / 로그아웃 ✅
- HR 교육 PPT 조회 ✅
- HR 시험 페이지 ✅

### 2️⃣ 추가기능 ✅

- 매니저 / 일반 회원 로그인 ✅
- HR 오리엔테이션 PPT 조회 ✅
- HR Insurance form 작성 및 제출 ✅
- 전체 직원 조회 및 직원 상세 보기 ✅
- HR 시험 후 PASS / FAIL 결과에 따른 증명서 발급 ✅

### 3️⃣ 심화기능 ✅

- 조지아 / 시카고 / 필라델피아 지점별 회원 권한 관리 ✅
- HR 시험 마감 날짜가 임박한 회원에 경고 표시 ✅

## 👨‍💻프로젝트 사용 기술

**Back-end**
- PHP
- Laravel
- MySQL

**Front-end**

- HTML
- Java Script
- CSS
- Bootstrap

## 🙋‍♂️ 역할 (개인 프로젝트)

- 요구사항을 분석하여 기획 및 개발 일정 작성
- 데이터 베이스 설계 및 ERD 작성
- 회원 가입 / 회원 탈퇴 / 로그인 / 로그 아웃 기능 구현
- 회원 권한에 따른 접근 제한 구현
- 직원 조회 및 검색 / 상세 보기  구현
- 구글 슬라이드와 연동하여 PPT 페이지 구현 (HR 교육, 오리엔테이션, Insurance)
- 자바스크립트를 활용해서 HR 시험 페이지 구현
- 테스트 결과에 따른 증명서 발급 및 재 시험 대상자 관리 구현
- SSL 인증서 발급 및 서버 배포

## 🎬 웹 사이트 설명

### Home
<img src=README_img/home.png>


📍MANAGER 로그인 - My page / Orientation / Insurance / Training / Employees 페이지 접근 가능

📍일반 회원 로그인 - My page / Orientation / Insurance 페이지 접근 가능

---

### Login
<img src=README_img/login.png>

---

### Employee
<img src=README_img/employee_list.png>

📍HR/ IT  매니저가 직원 정보와 교육 현황을 한눈에 쉽게 파악할 수 있는 페이지.

📍Info 칸에 경고등은 교육의 deadline date를 기준으로 지났으면 빨간 경고등이, 14일 이하로 남았으면 노란 경고등 표시

📍그만둔 직원의 경우는 그 칸이 빨간색으로 표시

📍Edit 권한은 HR Manager 에게만, Permission 과 delete권한은 IT Manager에게만 부여여

---

### Employee
<img src=README_img/employee_list_2.png>

📍지점별로 직원 리스트를 볼 수 있고, 이름이나 기타 다른 항목들을 통해 검색 가능

📍NEW EMPLOYEE 버튼을 통해 새로운 직원 등록 가능

---

### My page
<img src=README_img/mypage.png>

📍직원의 개인 정보와 트레이닝 정보를  자세히 볼 수 있는 페이지

📍Training name와 결과(Pass / Fail / Not started)를 표시

📍시험을 본 날짜, 마감 날짜, 다음에 시험을 봐야 하는 날짜를 표시

📍아래에 해당하는 트레이닝 페이지로 이동할 수 있는 버튼 표시

---

### Training
<img src=README_img/training.png>

📍구글슬라이드에 PPT를 업로드하고, 그 PPT를 페이지 화면에 띄워주는 방식

📍KOR / ENG / SPN 버전 각각 준비

📍시험을 볼 준비가 됐으면 TEST 버튼 클릭해서 TEST 페이지로 이동

---

### Test(Quiz)
<img src=README_img/quiz.png>

📍각 training 에 맞는 테스트를 볼 수 있는 페이지

📍KOR / ENG / SPN 세 가지 버전

📍Javascript를 활용해서 테스트 로직을 구현

---

### Result (PASS)
<img src=README_img/pass.png>


### Result (FAIL)
<img src=README_img/fail.png>

---

### Certificate
<img src=README_img/cert.png>
<img src=README_img/cert2.png>

📍테스트를 PASS 했을 경우 Certificate를 조회할 수 있고 저장도 가능

---

### Orientation
<img src=README_img/orientation.png>

📍HR에서 전 직원에게 교육해야 하는 orientation PPT 조회

📍KOR/ENG/SPN 세 가지 버전

---

### Insurance
<img src=README_img/insurance.png>

📍HR에서 전 직원에게 알려줘야 하는 Insurance PPT 조회

📍KOR/ENG/SPN 세 가지 버전

📍GA55(조지아), IL70(시카고), PA88(필라델피아) 지점별 insurance 정보가 다르기 때문에, 로그인한 직원의 정보에 따라 본인의 지점 관련 내용만 조회 가능

📍본 화면은 매니저 화면

---

### Insurance
<img src=README_img/insurance_form.png>

<img src=README_img/insurance_form2.png>

📍Insurance는 직원이 직접 작성해야 하는 form

📍jotform이라는 플랫폼을 활용

📍직원들이 form을 제출하면 HR매니저가 이 form을 jotform 플랫폼에서 확인 가능

---