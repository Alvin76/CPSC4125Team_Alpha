000100 IDENTIFICATION DIVISION.                                         00010000
000200 PROGRAM-ID.    BREAKS.                                           00020056
000300 AUTHOR.        CSU0020 ADAM DAVIES.                              00030005
000400**************************************************************    00040000
000500*                                                            *    00050000
000600*    EXAMPLE PAYROLL PROGRAM SERIES FOR CPSC3111 (COBOL).    *    00060001
000700*    FORMAT OF THE SELECT STATEMENT FOR THE DATA SETS USED.  *    00070001
000800*                                                            *    00080000
000900**************************************************************    00090000
001000                                                                  00100000
001100 ENVIRONMENT DIVISION.                                            00110000
001200 CONFIGURATION SECTION.                                           00120002
001300 SOURCE-COMPUTER.                                                 00130002
001400     Z13                                                          00140002
001500     WITH DEBUGGING MODE                                          00150002
001600     .                                                            00160002
001700                                                                  00170002
001800 INPUT-OUTPUT SECTION.                                            00180000
001900                                                                  00190001
002000 FILE-CONTROL.                                                    00200000
002100     SELECT PAY-FILE               ASSIGN TO MYINFILE.            00210022
002200     SELECT PRINT-FILE             ASSIGN TO MYREPORT.            00220022
002300                                                                  00230000
002400 DATA DIVISION.                                                   00240000
002500 FILE SECTION.                                                    00250000
002600                                                                  00260000
002700 FD  PAY-FILE                                                     00270000
002800     RECORDING MODE IS F.                                         00280000
002900 01  PAY-REC.                                                     00290001
003000     10  FILLER                    PIC X(080).                    00300022
003100                                                                  00310000
003200 FD  PRINT-FILE                                                   00320000
003300     RECORDING MODE IS F.                                         00330000
003400 01  PRINT-REC.                                                   00340000
003500     10  FILLER                    PIC X(132).                    00350022
003600                                                                  00360000
003700 WORKING-STORAGE SECTION.                                         00370000
003800                                                                  00380000
003900 01  WS-COUNTERS-FLAGS.                                           00390000
004000     10  EOF-FLAG                  PIC X(03) VALUE "NO".          00400022
004100     10  WS-SPACING                PIC 9(01) VALUE 2.             00410022
004200     10  REC-COUNT                 PIC 9(05) VALUE ZERO.          00420022
004300     10  WS-LINE-COUNT             PIC 9(03) VALUE 0.             00430022
004400     10  WS-PAGE                   PIC 9(03) VALUE 0.             00440022
004500                                                                  00450015
004600 01  PAY-CAL-FIELDS.                                              00460043
004700     10  PC-HR-USED                PIC S9(04)V9  VALUE 0.         00470045
004800     10  PC-REG-HR                 PIC S9(04)V9  VALUE 0.         00480045
004900     10  PC-OT-HR                  PIC S9(04)V9  VALUE 0.         00490045
005000     10  PC-REG-PAY                PIC S9(05)V99 VALUE 0.         00500043
005100     10  PC-REG-RATE               PIC S9(05)V99 VALUE 0.         00510043
005200     10  PC-OT-PAY                 PIC S9(05)V99 VALUE 0.         00520043
005300     10  PC-OT-RATE                PIC S9(05)V99 VALUE 0.         00530043
005400     10  PC-NET-PAY                PIC S9(05)V99 VALUE 0.         00540043
005500     10  PC-GROSS-PAY              PIC S9(05)V99 VALUE 0.         00550043
005600     10  PC-DEDS                   PIC S9(05)V99 VALUE 0.         00560053
005700                                                                  00570060
005800 01  DIV-DEPT-FIELDS.                                             00580060
005900     10  DD-DIV                    PIC X(02) VALUE "  ".          00590061
006000     10  DD-DEPT                   PIC X(03) VALUE "   ".         00600061
006100                                                                  00610027
006200 01  FINAL-TOTALS.                                                00620028
006300     10  FT-HR-USED                PIC S9(04)V9  VALUE 0.         00630043
006400     10  FT-NET-PAY                PIC S9(05)V99 VALUE 0.         00640043
006500     10  FT-REG-PAY                PIC S9(05)V99 VALUE 0.         00650043
006600     10  FT-OT-PAY                 PIC S9(05)V99 VALUE 0.         00660043
006700     10  FT-EMP-DEDS               PIC S9(05)V99 VALUE 0.         00670043
006800                                                                  00680027
006900 01  DIVISION-TOTALS.                                             00690057
007000     10  DT-HR-USED                PIC S9(04)V9  VALUE 0.         00700057
007100     10  DT-NET-PAY                PIC S9(05)V99 VALUE 0.         00710057
007200     10  DT-REG-PAY                PIC S9(05)V99 VALUE 0.         00720057
007300     10  DT-OT-PAY                 PIC S9(05)V99 VALUE 0.         00730057
007400     10  DT-EMP-DEDS               PIC S9(05)V99 VALUE 0.         00740057
007500                                                                  00750057
007600 01  DEPT-TOTALS.                                                 00760075
007700     10  PT-HR-USED                PIC S9(04)V9  VALUE 0.         00770057
007800     10  PT-NET-PAY                PIC S9(05)V99 VALUE 0.         00780057
007900     10  PT-REG-PAY                PIC S9(05)V99 VALUE 0.         00790057
008000     10  PT-OT-PAY                 PIC S9(05)V99 VALUE 0.         00800057
008100     10  PT-EMP-DEDS               PIC S9(05)V99 VALUE 0.         00810057
008200                                                                  00820005
008300     COPY PAYROLL.                                                00830057
008400                                                                  00840057
008500 01  WS-PRINT-REC                  VALUE SPACES.                  00850022
008600     05  PR-TOTALS-NAME.                                          00860028
008700         10  FILLER                PIC X(01).                     00870064
008800         10  PR-DIV                PIC X(02).                     00880059
008900         10  FILLER                PIC X(01).                     00890059
009000         10  PR-DEPT               PIC X(03).                     00900059
009100         10  FILLER                PIC X(01).                     00910065
009200         10  PR-LAST-NAME          PIC X(11).                     00920025
009300         10  FILLER                PIC X(01).                     00930025
009400         10  PR-ID-NUMBER          PIC X(05).                     00940029
009500         10  FILLER                PIC X(01).                     00950065
009600     05  PR-HR-WORKED.                                            00960028
009700         10  PR-HOURS-WORKED       PIC ZZZ.9.                     00970065
009800         10  FILLER                PIC X(01).                     00980065
009900     05  PR-REST.                                                 00990028
010000         10  PR-REG-PAY            PIC Z,ZZZ.99.                  01000065
010100         10  FILLER                PIC X(02).                     01010025
010200         10  PR-OT-PAY             PIC Z,ZZ9.99.                  01020065
010300         10  FILLER                PIC X(02).                     01030025
010400         10  PR-EMP-DEDS           PIC Z,ZZ9.99.                  01040065
010500         10  FILLER                PIC X(02).                     01050025
010600         10  PR-NET-PAY            PIC Z,ZZ9.99CR.                01060065
010700         10  PR-AST                PIC X(03).                     01070060
010800         10  FILLER                PIC X(50).                     01080064
010900                                                                  01090005
011000 01  WS-DATE.                                                     01100012
011100     10  YY                        PIC 9(02).                     01110012
011200     10  MM                        PIC 9(02).                     01120012
011300     10  DD                        PIC 9(02).                     01130012
011400                                                                  01140012
011500 01  WS-TIME.                                                     01150012
011600     10  HH                        PIC 9(02).                     01160012
011700     10  MN                        PIC 9(02).                     01170012
011800     10  SS                        PIC 9(02).                     01180012
011900     10  MS                        PIC 9(02).                     01190012
012000                                                                  01200012
012100 01  HEADING-1.                                                   01210012
012200     10  FILLER                    PIC X(02) VALUE SPACES.        01220012
012300     10  H-DATE.                                                  01230012
012400         15  H-MM                  PIC 9(02).                     01240012
012500         15  H-SLASH1              PIC X(01) VALUE '/'.           01250012
012600         15  H-DD                  PIC 9(02).                     01260012
012700         15  H-SLASH2              PIC X(01) VALUE '/'.           01270012
012800         15  H-YY                  PIC 9(02).                     01280012
012900     10  FILLER                    PIC X(03) VALUE SPACES.        01290012
013000     10  H-TIME.                                                  01300012
013100         15  H-HH                  PIC Z9.                        01310012
013200         15  H-COLON               PIC X(01) VALUE ':'.           01320012
013300         15  H-MN                  PIC 9(02).                     01330012
013400     10  FILLER                    PIC X(04) VALUE SPACES.        01340012
013500     10  FILLER                    PIC X(40) VALUE                01350013
013600         'PROGRAM 5, (20) ADAM DAVIES            '.               01360056
013700     10  FILLER                    PIC X(05) VALUE SPACES.        01370012
013800     10  FILLER                    PIC X(06) VALUE 'PAGE: '.      01380012
013900     10  H-PAGE                    PIC Z(03).                     01390012
014000                                                                  01400012
014100 01  HEADING-2.                                                   01410012
014200     10  FILLER                    PIC X(40) VALUE                01420012
014300         ' CCTR   LAST         EMP# HOURS  REG PAY'.              01430082
014400     10  FILLER                    PIC X(40) VALUE                01440012
014500         '    OT PAY      DEDS   NET PAY         '.               01450082
014600                                                                  01460012
014700 PROCEDURE DIVISION.                                              01470010
014800                                                                  01480010
014900 010-START-HERE.                                                  01490010
015000     OPEN INPUT PAY-FILE                                          01500010
015100     OPEN OUTPUT PRINT-FILE                                       01510010
015200     PERFORM 100-READ-INPUT                                       01520010
015300     PERFORM 850-GET-DATE                                         01530014
015400     PERFORM 800-PRINT-HEADINGS                                   01540013
015500     MOVE PAY-DIV TO DD-DIV                                       01550060
015600     MOVE PAY-DEPT TO DD-DEPT                                     01560060
015700                                                                  01570060
015800     PERFORM 300-PROCESS-DATA                                     01580010
015900       UNTIL EOF-FLAG = "YES"                                     01590010
016000                                                                  01600005
016100     PERFORM 511-FINAL-DIV                                        01610077
016200     PERFORM 900-PRINT-FINAL-TOTALS                               01620028
016300     CLOSE PAY-FILE                                               01630010
016400     CLOSE PRINT-FILE                                             01640010
016500     GOBACK.                                                      01650010
016600                                                                  01660010
016700 100-READ-INPUT.                                                  01670010
016800     READ PAY-FILE INTO WS-PAY-REC                                01680010
016900       AT END                                                     01690010
017000         MOVE "YES" TO EOF-FLAG                                   01700083
017100     END-READ                                                     01710010
017200     ADD 1 TO REC-COUNT.                                          01720010
017300                                                                  01730010
017400 300-PROCESS-DATA.                                                01740010
017500     PERFORM 500-CAL-TYPE                                         01750078
017600     PERFORM 100-READ-INPUT                                       01760029
017700     .                                                            01770034
017800                                                                  01780078
017900 310-NAME-SETUP.                                                  01790078
018000     MOVE PAY-LAST-NAME TO PR-LAST-NAME                           01800078
018100     MOVE PAY-ID-NUMBER TO PR-ID-NUMBER                           01810078
018200     MOVE PAY-HOURS-WORKED TO PR-HOURS-WORKED                     01820078
018300     MOVE PAY-DIV TO PR-DIV                                       01830078
018400     MOVE PAY-DEPT TO PR-DEPT                                     01840078
018500     INITIALIZE PAY-CAL-FIELDS                                    01850078
018600     .                                                            01860078
018700                                                                  01870078
018800 400-CAL-PAY.                                                     01880025
018900     MOVE PAY-HOURS-WORKED TO PC-HR-USED                          01890055
019000     IF PAY-PAY-TYPE EQUAL "S"                                    01900028
019100         PERFORM 420-SALARY                                       01910028
019200     ELSE                                                         01920028
019300         IF PAY-PAY-TYPE EQUAL "H"                                01930028
019400             PERFORM 440-HOURLY                                   01940028
019500         ELSE                                                     01950028
019600             MOVE 0 TO PC-HR-USED                                 01960055
019700             MOVE "*** INVALID PAY TYPE - RECORD IGNORED ***"     01970029
019800               TO PR-REST                                         01980083
019900         END-IF                                                   01990029
020000     END-IF                                                       02000029
020100     .                                                            02010027
020200                                                                  02020042
020300 420-SALARY.                                                      02030028
020400     MOVE PAY-EMP-RATE TO PC-GROSS-PAY                            02040028
020500     MOVE 0 TO PC-OT-PAY                                          02050028
020600     MOVE PAY-EMP-RATE TO PC-REG-PAY                              02060031
020700     PERFORM 480-NET-PAY                                          02070028
020800     .                                                            02080027
020900                                                                  02090042
021000 440-HOURLY.                                                      02100028
021100     IF PC-HR-USED > 40                                           02110028
021200         PERFORM 450-OT-PAY                                       02120028
021300     ELSE                                                         02130028
021400         MOVE 0 TO PC-OT-PAY                                      02140028
021500         MOVE PC-HR-USED TO PC-REG-HR                             02150028
021600         PERFORM 460-REG-PAY                                      02160028
021700     END-IF                                                       02170029
021800     .                                                            02180028
021900                                                                  02190042
022000 450-OT-PAY.                                                      02200028
022100     SUBTRACT 40 FROM PC-HR-USED                                  02210028
022200       GIVING PC-OT-HR                                            02220028
022300     MOVE 40 TO PC-REG-HR                                         02230034
022400     MULTIPLY PAY-EMP-RATE BY 1.5                                 02240028
022500       GIVING PC-OT-RATE ROUNDED                                  02250044
022600     MULTIPLY PC-OT-RATE BY PC-OT-HR                              02260028
022700       GIVING PC-OT-PAY ROUNDED                                   02270044
022800     PERFORM 460-REG-PAY                                          02280050
022900     .                                                            02290028
023000                                                                  02300050
023100 460-REG-PAY.                                                     02310028
023200     MULTIPLY PAY-EMP-RATE BY PC-REG-HR                           02320028
023300       GIVING PC-REG-PAY ROUNDED                                  02330044
023400     MOVE 0 TO PC-GROSS-PAY                                       02340035
023500     ADD PC-OT-PAY TO PC-GROSS-PAY                                02350035
023600     ADD PC-REG-PAY TO PC-GROSS-PAY                               02360035
023700     PERFORM 480-NET-PAY                                          02370028
023800     .                                                            02380028
023900                                                                  02390042
024000 480-NET-PAY.                                                     02400028
024100     MOVE PAY-EMP-DEDS TO PC-DEDS                                 02410053
024200     SUBTRACT PC-DEDS FROM PC-GROSS-PAY                           02420053
024300       GIVING PC-NET-PAY                                          02430028
024400     MOVE PC-REG-PAY TO PR-REG-PAY                                02440041
024500     MOVE PC-OT-PAY TO PR-OT-PAY                                  02450041
024600     MOVE PAY-EMP-DEDS TO PR-EMP-DEDS                             02460041
024700     MOVE PC-NET-PAY TO PR-NET-PAY                                02470041
024900     .                                                            02490041
025000                                                                  02500042
025100 500-CAL-TYPE.                                                    02510060
025200     IF PAY-DIV NOT EQUAL DD-DIV                                  02520072
025300        PERFORM 510-DIV-CHANGE                                    02530072
025400     ELSE                                                         02540072
025500        IF PAY-DEPT NOT EQUAL DD-DEPT                             02550072
025600           PERFORM 520-DEPT-CHANGE                                02560072
025700        ELSE                                                      02570072
025800                                                                  00000000
025900        END-IF                                                    02590072
026000     END-IF                                                       00000000
000000     PERFORM 530-CAL-SETUP                                        00000000
026100     .                                                            02610072
026200                                                                  02620072
026300*  WAY TOO MUCH DUPLICATE CODE - TRY TO CLEAN IT UP!              02630084
026400*  SEVERAL SMALL PARAGRAPHS SHOULD BE COMBINED!                   02640084
026500 510-DIV-CHANGE.                                                  02650072
026700     520-DEPT-CHANGE.                                             02670083
031500     ADD DT-HR-USED TO FT-HR-USED                                 03150060
031600     ADD DT-REG-PAY TO FT-REG-PAY                                 03160060
031700     ADD DT-OT-PAY  TO FT-OT-PAY                                  03170060
031800     ADD DT-EMP-DEDS TO FT-EMP-DEDS                               03180061
031900     ADD DT-NET-PAY TO FT-NET-PAY                                 03190060
026900     PERFORM 610-PRINT-DIV-TOTALS                                 02690083
027100     INITIALIZE DIVISION-TOTALS                                   02710073
027300     .                                                            02730072
027400                                                                  02740072
028200 520-DEPT-CHANGE.                                                 02820077
030700     ADD PT-HR-USED TO DT-HR-USED                                 03070060
030800     ADD PT-REG-PAY TO DT-REG-PAY                                 03080060
030900     ADD PT-OT-PAY  TO DT-OT-PAY                                  03090060
031000     ADD PT-EMP-DEDS TO DT-EMP-DEDS                               03100061
031100     ADD PT-NET-PAY TO DT-NET-PAY                                 03110060
028400     PERFORM 620-PRINT-DEPT-TOTALS                                02840083
028500     INITIALIZE DEPT-TOTALS                                       02850075
028700     .                                                            02870072
028800                                                                  02880072
028900 530-CAL-SETUP.                                                   02890072
029000     PERFORM 310-NAME-SETUP                                       02900078
029100     PERFORM 400-CAL-PAY                                          02910078
029200     PERFORM 570-CAL-DEPT                                         02920072
029300     MOVE PAY-DIV TO DD-DIV      been edited                      02930072
029400     MOVE PAY-DEPT TO DD-DEPT                                     02940076
029500     PERFORM 700-PRINT-LINE                                       02950072
029600     .                                                            02960072
029700                                                                  02970072
029800 *570-CAL-DEPT.                                                   02980072
029900     ADD PC-HR-USED TO PT-HR-USED                                 02990060
030000     ADD PC-REG-PAY TO PT-REG-PAY                                 03000060
030100     ADD PC-OT-PAY  TO PT-OT-PAY                                  03010060
030200     ADD PC-DEDS TO PT-EMP-DEDS                                   03020072
030300     ADD PC-NET-PAY TO PT-NET-PAY                                 03030060
030400     .                                                            03040060
031300                                                                  03130060
032200 610-PRINT-DIV-TOTALS.                                            03220083
032300     MOVE DT-HR-USED TO PR-HOURS-WORKED                           03230083
032400     MOVE '** ' TO PR-AST                                         03240083
032500     MOVE DT-REG-PAY TO PR-REG-PAY                                03250083
032600     MOVE DT-OT-PAY TO PR-OT-PAY                                  03260083
032700     MOVE DT-EMP-DEDS TO PR-EMP-DEDS                              03270083
032800     MOVE DT-NET-PAY TO PR-NET-PAY                                03280083
032900     MOVE '   DIVISION TOTALS' TO PR-TOTALS-NAME                  03290083
033000     PERFORM 700-PRINT-LINE                                       03300083
033010     MOVE 2 TO WS-SPACING                                         03301086
033100     .                                                            03310083
033200                                                                  03320083
033300 620-PRINT-DEPT-TOTALS.                                           03330083
033400     MOVE PT-HR-USED TO PR-HOURS-WORKED                           03340083
033500     MOVE '*  ' TO PR-AST                                         03350083
033600     MOVE PT-REG-PAY TO PR-REG-PAY                                03360083
033700     MOVE PT-OT-PAY TO PR-OT-PAY                                  03370083
033800     MOVE PT-EMP-DEDS TO PR-EMP-DEDS                              03380083
033900     MOVE PT-NET-PAY TO PR-NET-PAY                                03390083
034000     MOVE '   DEPARTMENT TOTALS' TO PR-TOTALS-NAME                03400083
034100     PERFORM 700-PRINT-LINE                                       03410083
034110     MOVE 2 TO WS-SPACING                                         03411086
034200     .                                                            03420083
034300 700-PRINT-LINE.                                                  03430012
034400     PERFORM 750-WRITE                                            03440012
034500     IF WS-LINE-COUNT > 50                                        03450012
034600         PERFORM 800-PRINT-HEADINGS                               03460012
034700     END-IF                                                       03470012
034800     .                                                            03480012
034900                                                                  03490012
035000 750-WRITE.                                                       03500012
035100     WRITE PRINT-REC FROM WS-PRINT-REC                            03510012
035200       AFTER ADVANCING WS-SPACING LINES                           03520012
035300     END-WRITE                                                    03530012
035400     ADD WS-SPACING TO WS-LINE-COUNT                              03540012
035500     MOVE 1 TO WS-SPACING                                         03550085
035600     MOVE SPACES TO WS-PRINT-REC                                  03560012
035700     .                                                            03570012
035800                                                                  03580012
035900 800-PRINT-HEADINGS.                                              03590012
036000     ADD 1 TO WS-PAGE                                             03600012
036100     MOVE WS-PAGE TO H-PAGE                                       03610012
036200     WRITE PRINT-REC FROM HEADING-1                               03620012
036300       AFTER ADVANCING PAGE                                       03630012
036400     END-WRITE                                                    03640012
036500     MOVE HEADING-2 TO WS-PRINT-REC                               03650012
036600     MOVE 2 TO WS-SPACING                                         03660012
036700     PERFORM 750-WRITE                                            03670012
036800     MOVE 2 TO WS-SPACING                                         03680012
036900     MOVE 0 TO WS-LINE-COUNT                                      03690012
037000     .                                                            03700012
037100                                                                  03710012
037200 850-GET-DATE.                                                    03720012
037300     ACCEPT WS-DATE FROM DATE                                     03730012
037400     MOVE MM TO H-MM                                              03740012
037500     MOVE DD TO H-DD                                              03750012
037600     MOVE YY TO H-YY                                              03760012
037700     ACCEPT WS-TIME FROM TIME                                     03770012
037800     MOVE HH TO H-HH                                              03780012
037900     MOVE MN TO H-MN                                              03790012
038000     .                                                            03800012
038100                                                                  03810042
038200 900-PRINT-FINAL-TOTALS.                                          03820060
038300     MOVE '***' TO PR-AST                                         03830060
038400     MOVE FT-HR-USED TO PR-HOURS-WORKED                           03840060
038500     MOVE FT-REG-PAY TO PR-REG-PAY                                03850060
038600     MOVE FT-OT-PAY TO PR-OT-PAY                                  03860060
038700     MOVE FT-EMP-DEDS TO PR-EMP-DEDS                              03870060
038800     MOVE FT-NET-PAY TO PR-NET-PAY                                03880060
038900     MOVE '   FINAL TOTALS' TO PR-TOTALS-NAME                     03890083
039000     PERFORM 700-PRINT-LINE                                       03900060
039100     .                                                            03910060
039200* END OF PROGRAM                                                  03920060
000100 IDENTIFICATION DIVISION.                                         00010000
000200 PROGRAM-ID.    TOTALS.                                           00020051
000300 AUTHOR.        CSU0011                                          00030008
000400**************************************************************    00040000
000500*                                                            *    00050000
000600*    EXAMPLE PAYROLL PROGRAM SERIES FOR CPSC3111 (COBOL).    *    00060001
000700*    FORMAT OF THE SELECT STATEMENT FOR THE DATA SETS USED.  *    00070001
000800*                                                            *    00080000
000900**************************************************************    00090000
001000                                                                  00100000
001100 ENVIRONMENT DIVISION.                                            00110000
001200 CONFIGURATION SECTION.                                           00120002
001300 SOURCE-COMPUTER.                                                 00130002
001400     Z13                                                          00140002
001500     WITH DEBUGGING MODE                                          00150002
001600     .                                                            00160002
001700                                                                  00170002
001800 INPUT-OUTPUT SECTION.                                            00180000
001900                                                                  00190001
002000 FILE-CONTROL.                                                    00200000
002100     SELECT PAY-FILE              ASSIGN TO MYINFILE.             00210000
002200     SELECT PRINT-FILE            ASSIGN TO MYREPORT.             00220000
002300                                                                  00230000
002400 DATA DIVISION.                                                   00240000
002500 FILE SECTION.                                                    00250000
002600                                                                  00260000
002700 FD  PAY-FILE                                                     00270000
002800     RECORDING MODE IS F.                                         00280000
002900 01  PAY-REC.                                                     00290001
003000     10  FILLER                   PIC X(080).                     00300000
003100                                                                  00310000
003200 FD  PRINT-FILE                                                   00320000
003300     RECORDING MODE IS F.                                         00330000
003400 01  PRINT-REC.                                                   00340000
003500     10  FILLER                   PIC X(132).                     00350000
003600                                                                  00360000
003700 WORKING-STORAGE SECTION.                                         00370000
003800                                                                  00380000
003900 01  WS-COUNTERS-FLAGS.                                           00390000
004000     10  EOF-FLAG                 PIC X(03) VALUE "NO".           00400000
004100     10  WS-SPACING               PIC 9(01) VALUE 2.              00410000
004200     10  REC-COUNT                PIC 9(05) VALUE ZERO.           00420000
004300     10  WS-LINE-COUNT            PIC 9(03) VALUE 0.              00430012
004400     10  WS-PAGE                  PIC 9(03) VALUE 0.              00440012
004500                                                                  00450036
004600 01  PAY-CALC-FEILDS.                                             00460053
004700     10  WS-REG-PAY               PIC S9(07)V99 VALUE 0.          00470036
004800     10  WS-OT-PAY                PIC S9(07)V99 VALUE 0.          00480036
004900     10  WS-GROSS-PAY             PIC S9(07)V99 VALUE 0.          00490036
005000     10  WS-NET-PAY               PIC S9(07)V99 VALUE 0.          00500036
005100     10  WS-HOURS-WORKED          PIC S9(06)V99 VALUE 0.          00510036
005200     10  WS-REG-HOURS             PIC S9(06)V99 VALUE 0.          00520036
005300     10  WS-OT-HOURS              PIC S9(06)V99 VALUE 0.          00530036
005400     10  WS-OT-RATE               PIC S9(07)V99 VALUE 0.          00540041
005500                                                                  00550036
005600 01  FINAL-TOTALS.                                                00560036
005700     10  FT-HOURS-WORKED          PIC S9(06)V99 VALUE 0.          00570036
005800     10  FT-REG-PAY               PIC S9(07)V99 VALUE 0.          00580036
005900     10  FT-OT-PAY                PIC S9(07)V99 VALUE 0.          00590036
006000     10  FT-EMP-DEDS              PIC S9(07)V99 VALUE 0.          00600036
006100     10  FT-NET-PAY               PIC S9(07)V99 VALUE 0.          00610036
006200                                                                  00620000
006300     COPY PAYROLL.                                                00630000
006400                                                                  00640000
006500 01  WS-PRINT-REC                 VALUE SPACES.                   00650008
006600     05  PR-TOT-MSG.                                              00660036
006700         10  FILLER                   PIC X(01).                  00670036
006800         10  PR-LAST-NAME             PIC X(11).                  00680036
006900         10  FILLER                   PIC X(03).                  00690036
007000         10  PR-ID-NUMBER             PIC X(05).                  00700037
007100         10  FILLER                   PIC X(03).                  00710036
007200         10  PR-HOURS-WORKED          PIC Z,ZZZ.99.               00720065
007300         10  FILLER                   PIC X(02).                  00730072
007400     05  PR-INV-MSG.                                              00740037
007500         10  PR-REG-PAY               PIC ZZ,ZZZ.99.              00750072
007600         10  FILLER                   PIC X(02).                  00760072
007700         10  PR-OT-PAY                PIC ZZ,ZZ9.99.              00770072
007800         10  FILLER                   PIC X(02).                  00780072
007900         10  PR-EMP-DEDS              PIC ZZ,ZZZ.99CR.            00790072
008000         10  FILLER                   PIC X(02).                  00800072
008100         10  PR-NET-PAY               PIC ZZ,ZZZ.99CR.            00810072
008200         10  FILLER                   PIC X(56).                  00820036
008300                                                                  00830014
008400 01  WS-DATE.                                                     00840014
008500     10  YY                       PIC 9(02).                      00850014
008600     10  MM                       PIC 9(02).                      00860014
008700     10  DD                       PIC 9(02).                      00870014
008800                                                                  00880014
008900 01  WS-TIME.                                                     00890014
009000     10  HH                       PIC 9(02).                      00900014
009100     10  MN                       PIC 9(02).                      00910014
009200     10  SS                       PIC 9(02).                      00920014
009300     10  MS                       PIC 9(02).                      00930014
009400                                                                  00940014
009500 01  HEADING-1.                                                   00950014
009600     10  FILLER                  PIC X(02) VALUE SPACES.          00960014
009700     10  H-DATE.                                                  00970014
009800         15  H-MM                PIC 9(02).                       00980017
009900         15  H-SLASH1            PIC X(01) VALUE '/'.             00990017
010000         15  H-DD                PIC 9(02).                       01000017
010100         15  H-SLASH2            PIC X(01) VALUE '/'.             01010017
010200         15  H-YY                PIC 9(02).                       01020017
010300     10  FILLER                  PIC X(03) VALUE SPACES.          01030014
010400     10  H-TIME.                                                  01040014
010500         15  H-HH                PIC Z9.                          01050017
010600         15  H-COLON             PIC X(01) VALUE ':'.             01060017
010700         15  H-MN                PIC 9(02).                       01070017
010800     10  FILLER                  PIC X(04) VALUE SPACES.          01080014
010900     10  FILLER                  PIC X(40) VALUE                  01090014
011000         'PROGRAM 3, (00)                        '.               01100036
011100     10  FILLER                  PIC X(05) VALUE SPACES.          01110014
011200     10  FILLER                  PIC X(06) VALUE 'PAGE: '.        01120014
011300     10  H-PAGE                  PIC Z(03).                       01130014
011400                                                                  01140014
011500 01  HEADING-2.                                                   01150014
011600     10  FILLER                  PIC X(40) VALUE                  01160014
011700         ' LAST           EMP#       HRS    REG P'.               01170075
011800     10  FILLER                  PIC X(40) VALUE                  01180014
011900         'AY     OT PAY        DEDS       NET PAY'.               01190075
012000                                                                  01200007
012100 PROCEDURE DIVISION.                                              01210007
012200                                                                  01220007
012300 010-START-HERE.                                                  01230007
012400     OPEN INPUT PAY-FILE                                          01240021
012500     OPEN OUTPUT PRINT-FILE                                       01250007
012600     PERFORM 100-READ-INPUT                                       01260018
012700     PERFORM 850-GET-DATE                                         01270015
012800     PERFORM 800-PRINT-HEADINGS                                   01280015
012900                                                                  01290007
013000     PERFORM 300-PROCESS-DATA                                     01300008
013200       UNTIL EOF-FLAG = "YES"                                     01320007
013300                                                                  01330007
013400     PERFORM 900-PRINT-FINAL-TOTALS                               01340050
013500     CLOSE PAY-FILE                                               01350007
013600     CLOSE PRINT-FILE                                             01360007
013700     GOBACK.                                                      01370007
013800                                                                  01380007
013900 100-READ-INPUT.                                                  01390007
014000     READ PAY-FILE INTO WS-PAY-REC                                01400007
014100       AT END                                                     01410007
014200         MOVE "YES" TO EOF-FLAG                                   01420007
014300     END-READ                                                     01430007
014400     ADD 1 TO REC-COUNT.                                          01440007
014500                                                                  01450007
014600 300-PROCESS-DATA.                                                01460007
014700     MOVE PAY-LAST-NAME TO PR-LAST-NAME                           01470007
014800     MOVE PAY-ID-NUMBER TO PR-ID-NUMBER                           01480041
014900     MOVE PAY-HOURS-WORKED TO PR-HOURS-WORKED                     01490041
014910     MOVE 0 TO WS-REG-PAY                                         01491068
014920     MOVE 0 TO WS-OT-PAY                                          01492068
014930*    MOVE 0 TO WS-NET-PAY                                         01493070
014940     MOVE 0 TO WS-OT-HOURS                                        01494068
014950     MOVE 0 TO WS-REG-HOURS                                       01495069
015000     PERFORM 400-CALC-PAY                                         01500041
015100*    MOVE WS-REG-PAY TO PR-REG-PAY                                01510074
015200*    MOVE WS-OT-PAY TO PR-OT-PAY                                  01520074
015300*    MOVE PAY-EMP-DEDS TO PR-EMP-DEDS                             01530074
015400*    MOVE WS-NET-PAY TO PR-NET-PAY                                01540074
015500*    PERFORM 700-PRINT-LINE                                       01550067
015510     PERFORM 550-ACCUM-FINAL-TOTALS                               01551053
015520     PERFORM 700-PRINT-LINE                                       01552067
015600     PERFORM 100-READ-INPUT.                                      01560010
015700                                                                  01570013
015800 400-CALC-PAY.                                                    01580037
015900*    INITIALIZE PAY-CALC-FIELDS                                   01590052
016000     MOVE PAY-HOURS-WORKED TO WS-HOURS-WORKED                     01600041
016100     IF PAY-PAY-TYPE EQUAL 'H'                                    01610037
016200         PERFORM 450-CALC-HOURLY                                  01620039
016201         MOVE WS-REG-PAY TO PR-REG-PAY                            01620174
016202         MOVE WS-OT-PAY TO PR-OT-PAY                              01620274
016203         MOVE PAY-EMP-DEDS TO PR-EMP-DEDS                         01620374
016204         MOVE WS-NET-PAY TO PR-NET-PAY                            01620474
016210     ELSE                                                         01621066
016300*    END-IF                                                       01630066
016400         IF PAY-PAY-TYPE EQUAL 'S'                                01640066
016500             PERFORM 440-CALC-SALARY                              01650066
016510             MOVE WS-REG-PAY TO PR-REG-PAY                        01651074
016520             MOVE WS-OT-PAY TO PR-OT-PAY                          01652074
016530             MOVE PAY-EMP-DEDS TO PR-EMP-DEDS                     01653074
016540             MOVE WS-NET-PAY TO PR-NET-PAY                        01654074
016600         ELSE                                                     01660066
016700             MOVE '   ** INVALID PAY TYPE - RECORD IGNORED **'    01670075
016800                TO PR-INV-MSG                                     01680066
016900     END-IF                                                       01690039
016910     END-IF                                                       01691066
017000     .                                                            01700039
017100*ENTER THE REMAINING DATA HERE                                    01710037
017200                                                                  01720037
017300 440-CALC-SALARY.                                                 01730039
017400     MOVE PAY-EMP-RATE TO WS-REG-PAY                              01740041
017500     MOVE PAY-EMP-RATE TO WS-GROSS-PAY                            01750041
017600     MOVE 0 TO WS-OT-PAY                                          01760039
017610     SUBTRACT PAY-EMP-DEDS FROM WS-GROSS-PAY                      01761071
017620       GIVING WS-NET-PAY                                          01762071
017700*    PERFORM 460-CALC-DEDS                                        01770052
017800     .                                                            01780039
017900                                                                  01790039
018000 450-CALC-HOURLY.                                                 01800038
018100     IF WS-HOURS-WORKED > 40                                      01810041
018200         SUBTRACT 40 FROM WS-HOURS-WORKED                         01820042
018300           GIVING WS-OT-HOURS                                     01830042
018400         ADD 40 TO WS-REG-HOURS                                   01840041
018500     ELSE                                                         01850067
018600         ADD WS-HOURS-WORKED TO WS-REG-HOURS                      01860067
018700     END-IF                                                       01870039
018800     MULTIPLY WS-REG-HOURS BY PAY-EMP-RATE                        01880041
018900       GIVING WS-REG-PAY ROUNDED                                  01890051
019000     MULTIPLY 1.5 BY PAY-EMP-RATE                                 01900039
019100       GIVING WS-OT-RATE ROUNDED                                  01910051
019200     MULTIPLY WS-OT-RATE BY WS-OT-HOURS                           01920042
019300       GIVING WS-OT-PAY ROUNDED                                   01930051
019400     ADD WS-REG-PAY TO WS-OT-PAY                                  01940039
019500       GIVING WS-GROSS-PAY                                        01950039
020000     SUBTRACT PAY-EMP-DEDS FROM WS-GROSS-PAY                      02000041
020100       GIVING WS-NET-PAY                                          02010039
020200     .                                                            02020039
020300                                                                  02030038
020400 550-ACCUM-FINAL-TOTALS.                                          02040037
020500     ADD WS-HOURS-WORKED TO FT-HOURS-WORKED                       02050037
020600     ADD WS-REG-PAY TO FT-REG-PAY                                 02060037
020700     ADD WS-OT-PAY TO FT-OT-PAY                                   02070037
020800     ADD PAY-EMP-DEDS TO FT-EMP-DEDS                              02080043
020900     ADD WS-NET-PAY TO FT-NET-PAY                                 02090037
021000     .                                                            02100051
021010                                                                  02101051
021020                                                                  02102051
021100 700-PRINT-LINE.                                                  02110013
021200     PERFORM 750-WRITE                                            02120013
021300     IF WS-LINE-COUNT > 50                                        02130013
021400         PERFORM 800-PRINT-HEADINGS                               02140013
021500     END-IF                                                       02150013
021600     .                                                            02160013
021700                                                                  02170029
021800 750-WRITE.                                                       02180013
021900     WRITE PRINT-REC FROM WS-PRINT-REC                            02190013
022000       AFTER ADVANCING WS-SPACING LINES                           02200013
022100     END-WRITE                                                    02210023
022200     ADD WS-SPACING TO WS-LINE-COUNT                              02220023
022300     MOVE 2 TO WS-SPACING                                         02230026
022400     MOVE SPACES TO WS-PRINT-REC                                  02240029
022500     .                                                            02250023
022600                                                                  02260013
022700 800-PRINT-HEADINGS.                                              02270013
022800     ADD 1 TO WS-PAGE                                             02280013
022900     MOVE WS-PAGE TO H-PAGE                                       02290013
023000     WRITE PRINT-REC FROM HEADING-1                               02300013
023100       AFTER ADVANCING PAGE                                       02310013
023200     END-WRITE                                                    02320013
023300     MOVE HEADING-2 TO WS-PRINT-REC                               02330013
023400     MOVE 2 TO WS-SPACING                                         02340028
023500     PERFORM 750-WRITE                                            02350023
023600     MOVE 2 TO WS-SPACING                                         02360028
023700     MOVE 0 TO WS-LINE-COUNT                                      02370013
023800     .                                                            02380013
023900                                                                  02390013
024000 850-GET-DATE.                                                    02400013
024100     ACCEPT WS-DATE FROM DATE                                     02410013
024200     MOVE MM TO H-MM                                              02420013
024300     MOVE DD TO H-DD                                              02430013
024400     MOVE YY TO H-YY                                              02440013
024500     ACCEPT WS-TIME FROM TIME                                     02450013
024600     MOVE HH TO H-HH                                              02460013
024700     MOVE MN TO H-MN                                              02470013
024800     .                                                            02480013
024900                                                                  02490050
025000 900-PRINT-FINAL-TOTALS.                                          02500051
025010     MOVE ' FINAL TOTALS' TO PR-TOT-MSG                           02501073
025100     MOVE FT-HOURS-WORKED TO PR-HOURS-WORKED                      02510050
025200     MOVE FT-REG-PAY TO PR-REG-PAY                                02520050
025300     MOVE FT-OT-PAY TO PR-OT-PAY                                  02530050
025400     MOVE FT-EMP-DEDS TO PR-EMP-DEDS                              02540050
025500     MOVE FT-NET-PAY TO PR-NET-PAY                                02550050
025600*    MOVE '     FINAL TOTALS' TO PR-TOT-MSG                       02560073
025700     PERFORM 700-PRINT-LINE                                       02570050
025800     .                                                            02580050
025900                                                                  02590050
