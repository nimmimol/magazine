<style>
    html {
  overflow-x: hidden;

}

body {
  font-size: 14px;
    height: 100%;
  width: 100%;
}

a a:focus {
  outline: none;
}

ul, ol {
  list-style: outside none none;
  margin: 0;
  padding: 0;
}

ul li, ol li {
  list-style: none;
}

/*COULEURS===========================*/

.g-blue {
  background-color: blue;
}

.g-green {
  background-color: green;
}

.g-purple {
  background-color: purple;
}

.g-non-atteint {
  color: #FF0066;
}

.g-atteint {
  color: #00ee99;
}

.g-alerte {
  color: #ff9955;
}

#g-profile-img {
  border: 5px solid #fff;
  position: absolute;
  width: 100px;
  height: 100px;
  margin-left: auto;
  top: 100px;
}

.g-action{
  margin:0 5px;
}

.g-action:hover{
  color: #0dcdbd;
}


/*USER BOX===========================*/

.user-profile-box {
  background: #ffffff;
  box-shadow: 0 0 20px rgba(38, 38, 38, 0.2);
  margin: 0 auto 50px;
  height: 100%;
}

.user-profile-box .header {
  padding: 30px 20px 120px;
  text-align: center;
  position: relative;
  background-repeat: no-repeat;
  border: none;
  margin-bottom: 50px;
  /* background: rgba(0, 0, 0, 0.04) url(../img/extra/corn-field-440338_640_200.jpg) top left repeat; */
  background: rgba(0, 0, 0, 0.04) url(https://cache.desktopnexus.com/thumbseg/2054/2054522-bigthumbnail.jpg) top left repeat;
  
  color: #ffffff;
  max-height: 100px;
 }

/*.user-profile-box .header h2 {
  text-shadow: 0px 0px 2px #AAAA;
  margin: 0 0 8px;
  color: #fff;
  font-size: 24px;
}*/

.user-profile-box .profile-img {
  background-clip: padding-box;
  float: left;
  height: 200px;
  width: 200px;
  margin-left: 0px;
  position: absolute;
  box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.1), 0 3px 3px 0 rgba(0, 0, 0, 0.1);
}


.user-profile-box .detail {
  padding-top: 50px;
}

.user-profile-box .detail ul li {
  color: #727272;
  border-bottom: 1px solid #f5f5f5;
  padding: 12px 20px;
  display: block;
  font-size: 14px;
  font-weight: 500;
}

div.detail ul.list-group a.list-group-item.active {
  background: #f5f5f5;
  color: #727272;
  font-weight: 500;
  border-color: #f5f5f5;
}

/*----------------------------------------------
  Dashboard Body
-----------------------------------------------*/
.dashborad-box {
  padding: 30px;
  margin-bottom: 30px;
  -webkit-box-shadow: 0 0 20px rgba(38, 38, 38, 0.2);
  box-shadow: 0 0 20px rgba(38, 38, 38, 0.2);
}

.dashborad-box .title {
  position: relative;
  padding-bottom: 15px;
  margin-bottom: 15px;
}

.dashborad-box .item {
  margin-bottom: 20px;
}

.dashborad-box .item .icon {
  float: left;
  width: 50px;
  position: relative;
}

.dashborad-box .item .icon:before {
  position: absolute;
  content: '';
  top: 0;
  right: 0;
  height: 100%;
  width: 1px;
  background: #d7d7d7;
}

.dashborad-box .item .icon span {
  font-size: 32px;
/*  color: #0dcdbd;*/
}



.dashborad-box .item .info {
  padding-left: 20px;
  float: left;
}

.dashborad-box .item .info .number {
  font-size: 16px;
  font-weight: 700;
  margin: 0;
  color: #272727;
}

.dashborad-box .item .info .type {
  font-size: 14px;
  color: #888;
}

.dashborad-box .item:after {
  display: table;
  content: "";
  clear: both;
}

.listing-table .table thead tr .rating span {
  background: #f3f3f3;
  padding: 0 3px;
  border-radius: 4px;
}

.listing-table .table thead tr .status .active {
  background: #f3f3f3;
  color: #ffffff;
  padding: 0 3px;
  border-radius: 4px;
}

.listing-table .table thead tr .status .non-active {
  background: #d7d7d7;
  padding: 0 3px;
  border-radius: 4px;
}

.listing-table .table thead tr .edit a span {
  color: #0dcdbd !important;
}

.listing-table .table thead tr th {
  margin-bottom: 0;
  border: none;
}

.messages .message {
  margin-top: 30px;
}

.messages .message:after {
  display: table;
  content: '';
  clear: both;
}

.messages .message .thumb {
  height: 120px;
  width: 120px;
  float: left;
  border-radius: 4px;
  overflow: hidden;
}

.messages .message .body {
  position: relative;
  float: left;
  width: calc(100% - 120px);
  padding-left: 20px;
}

.messages .message .body h6 {
  font-size: 18px;
}

.messages .message .body h6 .badge {
  background: #0dcdbd;
  color: #ffffff;
}

.messages .message .body .post-time {
  margin-bottom: 0;
  color: #0dcdbd;
}

.messages .message .body .controller {
  position: absolute;
  top: 0;
  right: 0;
}

.messages .message .body .controller ul li {
  display: inline-block;
  margin-left: 6px;
}

.messages .message .body .controller ul li a {
  color: #888;
}

.messages .message .body .controller ul li a:hover {
  color: #0dcdbd;
}

.review {
  margin-top: 30px;
  display: inline-block;
}

.review .thumb {
  height: 120px;
  width: 120px;
  float: left;
  border-radius: 4px;
  overflow: hidden;
}

.review .thumb:after {
  display: table;
  content: '';
  clear: both;
}

.review .body {
  position: relative;
  float: left;
  width: calc(100% - 120px);
  padding-left: 20px;
}

.review .body h6 .stars {
  margin-left: 10px;
  font-size: 1rem;
}

.review .body h6 .stars i {
  color: #fcc200;
}

.review .body .post-time {
  margin-bottom: 0;
  color: #0dcdbd;
}

.review .body .controller {
  position: absolute;
  top: 0;
  right: 0;
}

.review .body .controller ul li {
  display: inline-block;
  margin-left: 6px;
}

.review .body .controller ul li a {
  color: #888;
}

.review .body .controller ul li a:hover {
  color: #0dcdbd;
}

.password-section {
  margin-top: 20px;
}

.password-section h6 {
  margin-bottom: 10px;
  color: #0dcdbd;
}

/*.user-profile-box {
  background: #ffffff;
  box-shadow: 0 0 20px rgba(38, 38, 38, 0.2);
  margin: 0 auto 50px;
}

.user-profile-box .header {
  padding: 30px 20px 120px;
  text-align: center;
  position: relative;
  background-repeat: no-repeat;
  border: none;
  margin: 0;
  background: rgba(0, 0, 0, 0.04) url(../img/avatar/user-bg.jpg) top left repeat;
  background-size: cover;
  color: #ffffff;
}

.user-profile-box .header h2 {
  margin: 0 0 8px;
  color: #fff;
  font-size: 24px;
}

.user-profile-box .header h4 {
  font-size: 16px;
  color: #fff;
  font-weight: 400;
}
*/
.user-profile-box .profile-img {
  border-radius: 4px;
  background-clip: padding-box;
  border: 5px solid #fff;
  bottom: -75px;
  float: left;
  height: 160px;
  width: 160px;
  left: 50%;
  margin-left: -75px;
  position: absolute;
  box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.1), 0 3px 3px 0 rgba(0, 0, 0, 0.1);
}

.user-profile-box .detail {
  padding-top: 100px;
}

.user-profile-box .detail ul li a {
  color: #727272;
  border-bottom: 1px solid #f5f5f5;
  padding: 12px 20px;
  display: block;
  font-size: 14px;
  font-weight: 500;
}

.user-profile-box .detail ul li a i {
  margin-right: 10px;
}

.user-profile-box .detail ul li .active {
  background: #fafafa;
  color: #0dcdbd;
  font-weight: 500;
}

.user-profile-box .detail ul li a:hover {
  background: #fafafa;
  color: #0dcdbd;
}

.my-address {
  background: #FFFFFF;
  box-shadow: 0 0 20px rgba(38, 38, 38, 0.2);
  padding: 30px;
}

/*.my-properties {
  background: #FFFFFF;
  box-shadow: 0 0 20px rgba(38, 38, 38, 0.2);
  padding: 30px;
}

.my-properties table {
  width: 100%;
  display: table;
}

.my-properties table thead tr th {
  font-size: 16px;
  background-color: #f3f3f3;
  border: none;
  font-weight: 700;
  padding: 10px 10px 10px 0;
}

.my-properties table thead tr th:first-child {
  padding-left: 30px;
}

.my-properties table tbody tr td {
  border-top: none;
  border-bottom: 1px solid #f3f3f3;
  padding: 30px 20px 30px 0;
  vertical-align: middle;
  font-size: 14px;
}

.my-properties table h2 {
  border: none;
  font-size: 16px;
  font-weight: 500;
  margin: 0 0 7px 0;
  padding: 0;
}

.my-properties table tbody tr .image {
  width: 150px;
}

.my-properties table tbody tr .image a img {
  width: 100%;
}

.my-properties table tbody tr td .actions .edit {
  float: left;
}

.my-properties table tbody tr td .inner figure {
  margin-bottom: 5px;
}

.my-properties table tbody tr td .inner figure i {
  font-size: 13px;
}

.my-properties table tbody tr td .price {
  font-size: 12px;
  font-weight: 500;
}

.my-properties table tbody tr td.actions {
  text-align: right;
}

.my-properties table tbody tr td.actions .edit {
  float: left;
  color: #0dcdbd;
}

.my-properties table tbody tr td.actions .edit i {
  -moz-transition: 0.4s;
  -webkit-transition: 0.4s;
  transition: 0.4s;
  margin-right: 5px;
}

.my-properties table tbody tr td.actions a {
  padding: 0;
  color: #f50057;
}

.my-properties table tbody tr td:last-child {
  padding-right: 5px;
}

.user-page .heading {
  margin-bottom: 25px;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 22px;
}

.notification-box {
  padding: 30px 35px;
  color: #727272;
  border-radius: 4px;
  background-color: #f3f3f3;
}

.notification-box h3 {
  font-size: 22px;
  margin-bottom: 10px;
}

.notification-box p {
  margin-bottom: 0;
}

.submit-property .drop-file {
  position: relative;
  border: 2px dashed #e5e5e5;
  border-radius: 4px;
  background: #fcfcfc;
  transition: all 0.3s linear;
  display: inline-block;
  width: 100%;
}*/

select {
  border: 0;
  font-size: 14px;
  width: 100%;
  line-height: 30px;
  padding: 0 15px;
  color: #727272;
  background: #ffffff;
  z-index: 1;
  width: 100%;
  position: relative;
  appearance: none;
  -moz-appearance: none;
  -webkit-appearance: none;
  position: relative;
  min-height: 45px;
  box-shadow: none;
  border: 1px solid #f3f3f3;
  background: #fff;
  border-radius: 4px;
  width: 100% !important;
  cursor: pointer;
}

select:focus {
  outline: none;
  box-shadow: none;
}

/*.form-check-input {
  margin-top: 7px;
}

.drop-file {
  position: relative;
  border: 2px dashed #d0d0d0;
  border-radius: 4px;
  background: #fcfcfc;
  transition: all 0.3s linear;
  display: inline-block;
  width: 100%;
}

.drop-file:before {
  position: absolute;
  height: 100%;
  width: 100%;
  content: "";
  top: 0;
  left: 0;
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.9));
  background-color: #66676b;
  opacity: 0;
  z-index: 10;
  transition: all 0.3s linear;
  border-radius: 4px;
}

.drop-file .drop-message {
  text-align: center;
  margin: 50px 0;
  font-size: 17px;
  color: #4a4747;
  transition: all 0.3s linear;
  position: relative;
  z-index: 11;
}

.drop-file .drop-message:hover {
  color: #66676b;
}

.drop-file .drop-message span {
  display: inline;
  line-height: 117px;
}

/* Portfolios Section */
#portfolio-section .mix {
  padding: 10px;
}

#portfolio .mix {
  display: none;
}

.controls {
  text-align: center;
  padding: 0px 0px 20px;
}

.controls .active {
  color: #0dcdbd !important;
  border-color: #0dcdbd;
  background: transparent;
}

.controls .btn {
  text-transform: uppercase;
  margin: 2px;
  color: #fff;
}

.controls:hover {
  cursor: pointer;
}

a:not([href]):not([tabindex]),
a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover {
  color: #fff;
}

#portfolio-section {
  position: relative;
}

#portfolio-section .portfolio-box {
  position: relative;
}

#portfolio-section .portfolio-box .overlay-box {
  position: absolute;
  top: 0px;
  left: 0px;
  right: 0px;
  bottom: 0px;
  padding-top: 25%;
  opacity: 0;
  -webkit-transition: all 500ms ease;
  -moz-transition: all 500ms ease;
  -ms-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
}

#portfolio-section .portfolio-box .overlay-box a {
  color: #ffffff;
  font-size: 16px;
  width: 50px;
  height: 50px;
  display: inline-block;
  line-height: 50px;
  background: #0dcdbd;
  border-radius: 4px;
  transform: scale(0, 0);
  -webkit-transform: scale(0, 0);
  -moz-transform: scale(0, 0);
  -ms-transform: scale(0, 0);
  -o-transform: scale(0, 0);
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
}

#portfolio-section .portfolio-box .overlay-box h3 {
  margin-top: 20px;
  color: #fff;
  font-size: 22px;
  -webkit-transform: translateY(20px);
  -moz-transform: translateY(20px);
  transform: translateY(20px);
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
}

#portfolio-section .portfolio-box:hover .overlay-box {
  background: rgba(0, 0, 0, 0.85);
  transform: scale(1, 1);
  opacity: 1;
}

#portfolio-section .portfolio-box:hover .overlay-box h3 {
  -webkit-transform: translateY(0px);
  -moz-transform: translateY(0px);
  transform: translateY(0px);
}

#portfolio-section .portfolio-box:hover .overlay-box a {
  -webkit-transform: scale(1, 1);
  -moz-transform: scale(1, 1);
  -ms-transform: scale(1, 1);
  -o-transform: scale(1, 1);
}*/</style>
