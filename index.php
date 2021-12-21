<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Croherze converter</title>
    <link href="favicon.png" rel="icon">
    <?php include 'includes/styles.php'; ?>
</head>
<body style="background: url(https://croherze.com/forum/images/styles/DarkCore/style_orange/pageBG.png) repeat bottom left; margin:1vh 2vw;">
    <div class="container-fluid">
        <?php include 'includes/nav.php'; ?>

        <div class="row">
            <div class="col-lg-6">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h5 class="card-title">Convert</h5>
                    </div>
                    <div class="card-body">
                        <form action="convert.php" method="get" id="frm-convert">
                            <div class="form-floating mb-3">
                                <input type="text" name="youtubelink" class="form-control" id="link" required placeholder="youtube.com" />
                                <label class="text-secondary" for="link">Youtube url</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-control" name="format" id="format">
                                    <option value="mp3">Audio (mp3)</option>
                                    <option value="mp4">Video (mp4)</option>
                                </select>
                                <label class="text-secondary" for="format">Format</label>
                            </div>
                            <button type="submit" class="btn btn-outline-primary"><i class="fas fa-sync-alt"></i> Convert</button>
                        </form>
                    </div>
                </div>

                <div class="card mt-3 bg-dark text-white" id="convert-response">
                    <div class="card-header">
                        <h5 class="card-title">Json response</h5>
                    </div>
                    <!--<div class="card-body">
                        <pre>{}</pre>
                    </div>-->
                    <div class="card-footer">
                        <table class="table table-borderless table-sm w-auto text-white">
                            <tbody>
                                <tr>
                                    <td>Error:</td>
                                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td>Error message:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Title:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Duration</td>
                                    <td><span id="duration">0</span> seconds</td>
                                </tr>
                                <tr>
                                    <td>Youtube ID</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Uploaded at</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <a target="_blank" class="btn btn-outline-primary disabled" href="#" id="download"><i class="fa fa-cloud-download" aria-hidden="true"></i> Listen/download</a>
                                        <a class="btn btn-outline-danger disabled" href="#" id="remove" data-id="">Remove</a>
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h5 class="card-title">Search</h5>
                    </div>
                    <div class="card-body">
                        <form action="search.php" method="get" id="frm-search">
                            <div class="form-floating mb-3">
                                <input type="text" name="q" class="form-control" id="q" required placeholder="search term" />
                                <label class="text-secondary" for="q">Search term</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number" name="max_results" id="max_results" class="form-control" value="10" placeholder="number">
                                <label class="text-secondary" for="max_results">Maximum results</label>
                            </div>

                            <button type="submit" class="btn btn-outline-primary"><i class="fas fa-search"></i> Search</button>
                        </form>
                    </div>
                </div>

                <div class="card mt-3 bg-dark text-white" id="search-response">
                    <div class="card-header">
                        <h5 class="card-title">Json response</h5>
                    </div>
                    <!--<div class="card-body">
                        <pre>{}</pre>
                    </div>-->
                    <div class="card-footer">
                        <table class="table table-borderless table-sm w-auto text-white">
                            <tbody>
                                <tr>
                                    <td>Error:</td>
                                    <td><i class="fa fa-times"></i></td>
                                </tr>
                                <tr>
                                    <td>Error message:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Results:</td>
                                    <td><ul></ul></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>