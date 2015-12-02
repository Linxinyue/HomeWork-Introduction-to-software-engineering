	


	<div class='accountsceshow' id='user2div'>
		<div class='picbutton'>
			<div class='change' onclick="change('user2')">
				<img class='changeimg' src='./img/change.jpg'/>
			</div>
			<div class='deletediv' onclick="deleteuser('user2')">
				<img class='delete' src='./img/cancle.png'/>
			</div>
		</div>
		<div class='accountsceboth'>
			<div class='accountname'>
				<div class='username'>name:</div>
				<div id='user2name' class='username'>xinyue1</div>
			</div>	
			<div class='accountpwd'>
				pawd:
				<input id='user2password' type='password' class='password' value='123456789' disabled/>
				<div class='showpassword' onclick="showpasswd('user2')">
					<img class='showpasswordimg' src='./img/showpasswd.jpg'/>
				</div>
			</div>
		</div>

		<div class='line'></div>
		<div class='security' id="user2sec">
			<div class='seccontent'>
				<div class='accountname'>
					<div class='username'>name:</div>
					<div id='user2secname' class='username'>xinyue</div>
				</div>	
				<div class='accountpwd'>
					pawd:
					<input  id='user2secpassword' type='password' class='password' value='123456sdfsdf' disabled/>
					<div class='showpassword' onclick="showsecpasswd('user2')">
						<img class='showpasswordimg' src='./img/showpasswd.jpg'/>
					</div>
				</div>
			</div>
			<div id='newplusdiv' >
				<img onclick='test2()' class='newplus' src='./img/plus.png' />
			</div>
		</div>
	</div>

	<!-- 默认显示的div样式1 -->
	<div class="accountshow" id="userdiv">
		<div class="picbutton">
			<div class="change" onclick="change('user')">
				<img class="changeimg" src="./img/change.jpg"/>
			</div>
			<div class="deletediv" onclick="deleteuser('user')">
				<img class="delete" src="./img/cancle.png"/>
			</div>
		</div>
		
		<div class="accountboth">
			<div class="accountname">
				<div class="username">name:</div>
				<div id="username" class="username">xinyue</div>
			</div>	
			<div class="accountpwd">
				pawd:
				<input id="userpassword" class="password" type="password" value="123456sdfsdf" disabled />
				<div class="showpassword" onclick="showpasswd('user')">
					<img class="showpasswordimg" src="./img/showpasswd.jpg"/>
				</div>
			</div>
		</div>
	</div>
	<div id="usersec" title="none"></div>


	<div class="accountsceshow" id="user1div">
		<div class="picbutton">
			<div class="change" onclick="change('user1')">
				<img class="changeimg" src="./img/change.jpg"/>
			</div>
			<div class="deletediv" onclick="deleteuser('user1')">
				<img class="delete" src="./img/cancle.png"/>
			</div>
		</div>
		<div class="accountsceboth">
			<div class="accountname">
				<div class="username">name:</div>
				<div id="user1name" class="username">xinyue1</div>
			</div>	
			<div class="accountpwd">
				pawd:
				<input id="user1password" type="password" class="password" value="123456789" disabled/>
				<div class="showpassword" onclick="showpasswd('user1')">
					<img class="showpasswordimg" src="./img/showpasswd.jpg"/>
				</div>
			</div>
		</div>

		<div class="line"></div>
		<div class="security">
			<div class="seccontent">
				<div class="accountname">
					<div class="username">name:</div>
					<div id="user1secname" class="username">xinyue</div>
				</div>	
				<div class="accountpwd">
					pawd:
					<input  id="user1secpassword" type="password" class="password" value="123456sdfsdf" disabled/>
					<div class="showpassword" onclick="showsecpasswd('user1')">
						<img class="showpasswordimg" src="./img/showpasswd.jpg"/>
					</div>
				</div>
			</div>
			<div id="newplusdiv" >
				<img onclick="test2()" class="newplus" src="./img/plus.png" />
			</div>
		</div>
	</div>
