<SECTION ID="INTRO" CLASS="INTRO-SECTION">
        <DIV CLASS="CONTAINER">
            <DIV CLASS="ROW">
                <DIV CLASS="COL-LG-12">
					<CENTER>
                    <H1>LOGIN</H1>
					<FORM NAME="F" METHOD="POST" ACTION="?PAGE=LOGIN">
                    <P><INPUT CLASS="FORM-CONTROL" STYLE="COLOR:#000;WIDTH:300PX;" PLACEHOLDER="ID" TYPE="TEXT" NAME="ID" />
					<INPUT CLASS="FORM-CONTROL" STYLE="COLOR:#000;WIDTH:300PX;" PLACEHOLDER="PW" TYPE="TEXT" NAME="PW" /></P>
                    <A CLASS="BTN BTN-DEFAULT PAGE-SCROLL" ONCLICK="F.SUBMIT();">LOGIN</A>
					</FORM>
					<?PHP
					IF($_POST){
						IF($_SESSION[ID]){
							ECHO "<SCRIPT>ALERT('YOU HAVE ALREADY LOGGED IN.');HISTORY.GO(-1);</SCRIPT>";
							EXIT();
						}

						$SQL = "SELECT * FROM MEMBER WHERE ID = '".TRIM($_POST[ID])."'";
						$RESULT = @MYSQL_QUERY($SQL);
						$DATA = @MYSQL_FETCH_ARRAY($RESULT);
						IF($DATA[ID]){
							IF($_POST[PW] == $DATA[PW]){
								$_SESSION[ID] = $DATA[ID];
								ECHO "<SCRIPT>ALERT('HELLO $_SESSION[ID]');LOCATION.HREF='./';</SCRIPT>";
							}ELSE{
								ECHO "<SCRIPT>HISTORY.GO(-1);</SCRIPT>";
								EXIT();
							}
						}ELSE{
							ECHO "<SCRIPT>HISTORY.GO(-1);</SCRIPT>";
							EXIT();
						}
					}
					?>
					</CENTER>
                </DIV>
            </DIV>
        </DIV>
    </SECTION>

admin' or if
