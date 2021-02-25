<?php
include_once 'header.php';
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQMAAADCCAMAAAB6zFdcAAAB41BMVEUZGScAACi8EYAAqOEAeqUZFyV9D3b90A8YHSwaFCEUGSQSQlxFFkYAGSgAfakdGCjlDBJ91DAAGigAFigAv+kAuucAruMaAAAAtuYAseQAyOwAw+oAvegAt+a5mRkAFCgAze7GDmzDD3LAEHgAECgA0/AACyjTC1PQDFnNDV/HDmrMDWHVC0//1w3/cBQA2/PdthQA5PbeCD/YCkoAGiIQACcAAygA9P/jBzQQDSfhCDqz0hb/XAAcGyb/wAi6pyvexCj/5ChWFj4UT2m3bhkaDRkqPChAFyT5exNzwS8EGh5KdytjE115ZSBfni2qERp3OiExLCUYJTIXOkYaABgUY25jFSjkBCkRf4t+EikOk6CSECvjBi0Oj5+PES9caCE0FynsWQbP8xJGUCRVKCKWsBy7RRVeFTCeED2u0BgVRlZHFi6YiiyKfStOSCkGtdK7DUiuiBeXdhvgqw686RncRwv8SgQIpMWsD1H+twoOgJ2GE0iBpiGxMxfcnBG4gxf+qQyVySGl4SHbjRPULQ/9mw4+FkUAl8ylD3/bfhSaE2z8jBGGGB6AFF0nNCi2ZRo5WSk2GDXCDxc+Yip4yzCCQSDgaRZalSygERsMX4JEOyRDJyXTXhmwUh1eTyJpsC7KpxYQEHIpAAAHI0lEQVR4nO3b/VMTRxjA8VzikXASkhyCyFtAjvAaIZAgBwSrFgi1vPpWK62otGitVqjaWvtiaRVbqVUUtPIif2r35e6yewnIaDVz2+f7C8OYMLnPPLu3ZhKXC4IgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIg6H9Qfq5fQO6bOH5ih49UpwLv9JXkLHkidnLvjh6pnjotqoEvdvCTnSCoZ04LbBA7+OnrEdSzpycnBTbACPL2DyMEQhvEYq9BUM9OdnVNdoltEPtsu+Wgft5FEs1Apz9Mg9g2G6N6pqu7mzUoevcv732kn5Mk/NMyiJ3c6pygznSTurqpQVHRmBgIUk/POUnHBq2xWCvpePYTozLV3k4RiEGRNnb+vPZ+X+w7Suq5cKHnok4MKEFr3Yms+6La0Y4zDHzTN3t7BTK48IWEDayyHhPil9qtkEH4y97e3pviGrSe7M94nH+mXWSDGzaDurq6/IzVoHTg7AbhXLzk/zzpMm9QR8o4JcQvdRgJZNApdZKTgXT5hmFQZwLgvuLvDcqVjnTtHbyBFpEiObiCt67z60NXryVd1ODGj8SA7Rt+EOLXO1oYBWJw69YtYpB8OTw750QE6dDhw4c/kLYwqK6u47ZF/0wLiTX4yTCQvvX2eWelnF3Jm7eNQTWJG4T49foWs0yDvr4+oQyqrZhBUGbqcZZCCzIoEtKgmhEoKytjBiHe0FBfzzIIbGAJYIOyo+atQTnSgGMYOIOfb98Wx8AaAdp35iDEv28wMhjqMwx+EcjAAigvLy+boIOgTDU2NjZwDHaD2w43+NU0KCtjBVA/0DcS1DuNpDRDg/AGFKB8T3kFXQzxZhTPIJ7BPGNgApDIgVm50kxjGDINOnN9QW9QFoNyHqCiYg9ZDPE7TU3NPEOjafB7ETa463yD+fl5asAB4CrxYog3kTgGm8FdoQwYgGLU7nyX8qTJzGJothvcFcVgDyNQTEPHJOVITU2TnYEz+M3BBlG7ATcCxZWVlaYBjmMQxsA+BxXsCCCB0tJSYrB/f42NoUkYg2jUZsACYAHLAMcxIAO/cAYJZFBsA9i3jzXgGDINHPo+UlYDEwAJoIhBbe1+G0NNhsGHzjSI2g0qK3mAtEGtnYEaBIPU4N49hxpUZRiU2gBKSkrSBrwDMQimDe4JY2ADMAwK3O5aOwM2GMUGfscbtNkNOADUbmrgtjOIaDCCDewAJR4PNrjvNkoz1LIGnX+IZsAAeAyDB263nUFYg5KSEl7As2A3MBnEN/CYEYMC3oAwCGPgzWrgYSokBnl2A7ebN3j40LEGxhwMzYfSBh6uXTs1eOhUA2MOhkKhEDJw9R/12FowDDIWwxFFRAP8tnD/xAJvUGisBfsgBOIuxiDiaAOvZRAaSMguV35/Ib8Ushr8GUdT4PIPBlmDvwUwCB1LoDUu7y3kloJpwC6Gvz7CT/cvBsUzCL0K4I/m7N3FjIFlkGcjUJSloEgGCcMg9OwR2hgZhELG4AFH4J8KBu0GTvyQXqZBKHSRRVjYxRjkcQSDJkFwSTiD0GOCUGiOAWOQZ2yHLvx1JouAzsFKKuVwA/2YHaF/wSBgDfKyEiwaBilnG7j0xONXHIIsL1ACzgAhkHtimmDplB8RON3AK+GP5Mp64tGIiTCA7g75xykBb5D3RGH3gtEpVSF/KZJytEG0SpLIh1UDaYVkAB+bs8xBAVoJSiAt4MNPDGvaurMNvFFv1Qb9nG0gMUBXxBA+Mfb/k7EffIxvCSo9FywNquSPhLVpIpBKrTvXAClE24bpl3l06emzkPH/J5ecMQf4IeooIThFV0E4vLySSglgQIZhTiMbg554To/NaEvYbbs33keXrZID8gsV74SucNHyAZwYBkQhgleEnHj8zNgXyWpIG+CVoAzSIcBPNwVMBkcaROba8EKIWgrDZHfU9RFjS8jn5gAPP94MRsnt0KeNrRxgWllZduQXGSKSNH7talWb13CItr3E24KceBoKPTdWg2VQgFfCi2DwDBkCbXUtffnry9PJsOZIApysIYjkxixyIAqzZBQSA0PGarAMzJVAbgc+bd24/rX16aSmhX25vo63TtaRw/AmZjBGQddf4dUgT1jvI5HT0dKSgleEtkqXwdpYUguL8RVPkhyR9OFNtDtE5/ANIpAYwfcGtC1SAzwG/sVRsg4iyxTA59zx37qIlJxri0Y3yXdeE8fG0SD4DAP8rdapRboO0E6wspzUBBoALrlT2tiMesfxXVJPktMiMSAnxAC+H4TROlibjgg4AUy6NF7l3SD3B/zrBDGwvugfHjuwvirsCKQLSMmqYd38DUso5i++sfWkE49Cb5AsjY9n/YfkqtiLAIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCMroXyYktMuW6SeAAAAAAElFTkSuQmCC" width="100%" height="130" alt="">
        </div>
    </div>
    <div class="card" style="margin-top: 2rem;">
        <div class="card-body">
            <!-- Button trigger modal -->

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-plus"></i>
            </button>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">EmployeeID</th>
                        <th scope="col">FirstName</th>
                        <th scope="col">LastName</th>
                        <th scope="col">BirthDate</th>
                        <th scope="col">Salary</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    $query = "SELECT * FROM `employee`";
                    $result = mysqli_query($conn, $query);
                    $i=1;
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <th scope="row"><?=$i?></th>
                            <td><?= $row['EmployeeID']?></td>
                            <td><?= $row['FirstName']?></td>
                            <td><?= $row['LastName']?></td>
                            <td><?= $row['BirthDate']?></td>
                            <td><?= $row['Salary']?></td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$i?>">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <button type="button" class="btn btn-danger" name="editrole" data-toggle="modal" data-target="#delete<?=$i?>">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    <?php
                    $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
include_once 'footer.php';
?>