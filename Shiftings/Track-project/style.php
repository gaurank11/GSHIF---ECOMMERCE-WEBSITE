<style>


@import url("https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap");
* {
  margin: 0;
  padding: 0;
}
.logo {
  width: 20%;
  display: flex;
  justify-content: center;
}
.logo img {
  width: 17%;
  height: 55px;
  border: 3px solid white;
  border-radius: 50px;
}

.navbar {
  display: flex;
  align-items: centre;
  justify-content: centre;
  position: sticky;
  top: 0;
  cursor: pointer;
  background-color: black;
}

.nav-list {
  width: 100%;
  background-color: black;
  display: flex;
  align-items: center;
}
.nav-list li {
  list-style: none;
  padding: 26px 30px;
}

.nav-list li a {
  text-decoration: none;
  color: white;
  font-size: 18px;
}

/* to change the colour when cursor is on word */
.nav-list li a:hover {
  text-decoration: none;
  color: grey;
}

.rig {
}

#search {
  padding: 5px;
  font-size: 17;
  border-color: grey;
  border-radius: 9px;
  width: 330px;
  text-align: center;
}

.background {
  background: rgba(0, 0, 0, 0.7) url("parcel.jpg");
  background-size: cover;
  background-blend-mode: darken;
}

.firstsection {
  height: 100vh;
}
.box-main {
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  max-width: 70%;
  margin: auto;
  height: 100%;
  text-align: center;
}
.sum{
  padding-left: 152px;
  padding-right: 92px;
}
.first-half {
  width: 90%;
  display: flex;
  flex-direction: column;
  justify-content: center;
 
}

.second-half {
  width: 30%;
  padding-bottom: 168px;
}
.second-half img {
  width: 70%;
  border-radius: 150px;
  display: block;
  margin: auto;
}

.text-big {
  font-size: 160%;
  padding: 20px;
}
.text-small {
  font-size: 100%;
}
.buttons{
  height: 100px;
  padding: 50px;
}
.btn {
  padding: 18px 32px;
    margin: 24px 6px;
    border: 1px solid white;
    border-radius: 25px;
    cursor: pointer;
    font-size: 18px;
}
.btn:hover {
  background-color: black;
  color: white;
}
.btn-sm {
  padding: 2px 10px;
  vertical-align: middle;
}

.btn-dark {
  padding: 7px 14px;
  border-radius: 8px;
  color: black;
  font-size: 20px;
  border: 2px solid black;
}
.btn-dark:hover {
  background-color: black;
  color: white;
}
/*********************************from here bottom part  ****************************************/
.section {
  padding-top: 29px;
  padding-bottom: 29px;
  height: 150px;
  display: flex;
  align-items: centre;
  justify-content: centre;
  max-width: 80%;
  margin: auto;
  font-family: "Ubuntu", sans-serif;
}
.section-left {
  flex-direction: row-reverse;
}

.paras {
  padding: 20px 65px;
}

.sup{
  padding-top: 29px;
  padding-bottom: 29px;
  height: 250px;
  display: flex;
  align-items: centre;
  justify-content: centre;
  max-width: 80%;
  margin: auto;
  font-family: "Ubuntu", sans-serif;
}

/* .sectionTag{

padding: 16px 0px;
} */

.sectionSubTag {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

.thumbnail img {
  width: 150px;
  border: 2px solid black;
  border-radius: 26px;
  
}

.contact {
  background-color: beige;
  height: 533px;
}
.text-advance {
  text-align: center;
  padding-top: 20px;
  font-family: "Ubuntu", sans-serif;
}
.form {
  max-width: 700px;
  margin: 20px auto;
}
.form-input {
  margin: 14px 0px;
  padding: 5px 3px;
  width: 100%;
  font-size: 15px;
  border: 2px solid grey;
  border-radius: 6px;
}

.name{
  background:none;
  border:none;
  width:300px;
  font-size:15px;
}

.email{
  background:none;
  border:none;
  font-size:15px;
  width:300px;
}
  .phone{
  background:none;
  border:none;
  font-size:15px;
  width:400px;
}
  .text{
  background:none;
  border:none;
  font-size:15px;
  width:300px;}

  .choice{
  background:none;

  font-size:15px;
  width:400px;
}

.comment{
  background:none;
  border:none;
  font-size:15px;
  width:300px;}
  
.text-footer {
  text-align: center;
  padding: 20px 0px;
  font-family: "Ubuntu", sans-serif;
  display: flex;
  justify-content: center;
  color: white;
}

.burger {
  display: none;
  position: absolute;
  cursor: pointer;
  right: 5%;
  top: 15px;
}
.line {
  width: 33px;
  background-color: white;
  height: 4px;
  margin: 3px 3px;
  margin: 3px 3px;
}

@media only screen and (max-width: 1100px) {
  .nav-list {
    flex-direction: column;
  }
  .navbar {
    flex-direction: column;
    justify-content: center;
  }
  .rightnav {
    text-align: center;
  }
  .burger {
    display: block;
  }
  .h-nav {
    height: 22px;
  }
}
.abus{
  height: 76%;
  
  margin-top: 25px;
}
.serv{
  margin-top: 40px;
  height: 133px;
}
.supp{
  margin-top: 50px ;
  height: 148px;
}

</style>