<section class="site-section">
    <div class="container">

        <div class="row align-items-center mb-5">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="d-flex align-items-center">
                    <div>
                        <h2>Thêm Công Việc</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-6">
                        <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Preview</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-12">
                <form class="p-4 p-md-5 border rounded" method="post">
                    <h3 class="text-black mb-5 border-bottom pb-2">Chi tiết công việc</h3>
                    <div class="form-group">
                        <label for="company-name">Tên Công Ty</label>
                        <input type="text" class="form-control" id="company-name" placeholder="Ví Dụ: Công Ty TNHH ABC">
                    </div>

                    <div class="form-group">
                        <label for="company-website-tw d-block">Upload hình nền Job</label> <br>
                        <label class="btn btn-primary btn-md btn-file">
                            Browse File<input type="file" hidden>
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="you@yourdomain.com">
                    </div>
                    <div class="form-group">
                        <label for="job-title">Mô tả nghề nghiệp</label>
                        <input type="text" class="form-control" id="job-title" placeholder="Product Designer">
                    </div>
                    <div class="form-group">
                        <label for="job-location">Địa Chỉ làm việc</label>
                        <input type="text" class="form-control" id="job-location" placeholder="Ví dụ: Hà nội">
                    </div>

                    <div class="form-group">
                        <label for="job-region">Khu vực làm việc</label>
                        <select class="selectpicker border rounded" id="city34534534" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Region">
                            <option value="" selected>Chọn tỉnh thành</option>
                        </select>
                    </div>
                    <select class="" id="city">on
                        <option value="" selected>Chọn tỉnh thành</option>
                    </select>

                    <div class="form-group">
                        <label for="job-type">Hình thức</label>
                        <select class="selectpicker border rounded" id="job-type" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job Type">
                            <option>Part Time</option>
                            <option>Full Time</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="job-description">Mô tả công việc</label>
                        <div class="editor" id="editor-1">
                            <p>Write Job Description!</p>
                        </div>
                    </div>


                    <h3 class="text-black my-5 border-bottom pb-2">Thông tin công ty</h3>
                    <div class="form-group">
                        <label for="company-name">Tên Công Ty</label>
                        <input type="text" class="form-control" id="company-name" placeholder="Ví Dụ: Công Ty TNHH ABC">
                    </div>

                    <div class="form-group">
                        <label for="company-tagline">Tagline (Optional)</label>
                        <input type="text" class="form-control" id="company-tagline" placeholder="e.g. New York">
                    </div>

                    <div class="form-group">
                        <label for="job-description">Company Description (Optional)</label>
                        <div class="editor" id="editor-2">
                            <p>Description</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="company-website">Website (Optional)</label>
                        <input type="text" class="form-control" id="company-website" placeholder="https://">
                    </div>

                    <div class="form-group">
                        <label for="company-website-fb">Facebook Username (Optional)</label>
                        <input type="text" class="form-control" id="company-website-fb" placeholder="companyname">
                    </div>

                    <div class="form-group">
                        <label for="company-website-tw">Twitter Username (Optional)</label>
                        <input type="text" class="form-control" id="company-website-tw" placeholder="@companyname">
                    </div>
                    <div class="form-group">
                        <label for="company-website-tw">Linkedin Username (Optional)</label>
                        <input type="text" class="form-control" id="company-website-tw" placeholder="companyname">
                    </div>

                    <div class="form-group">
                        <label for="company-website-tw d-block">Upload Logo</label> <br>
                        <label class="btn btn-primary btn-md btn-file">
                            Browse File<input type="file" hidden>
                        </label>
                    </div>

                </form>
            </div>


        </div>
        <div class="row align-items-center mb-5">

            <div class="col-lg-4 ml-auto">
                <div class="row">
                    <div class="col-6">
                        <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Preview</a>
                    </div>
                    <div class="col-6">
                        <a href="#" class="btn btn-block btn-primary btn-md">Save Job</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
    let result123 = []
    var citis = document.getElementById("city");
    var districts = document.getElementById("district");
    var wards = document.getElementById("ward");
    var Parameter = {
        url: "../Assets/js/data.json",
        method: "GET",
        responseType: "application/json",
    };
    fetch(Parameter.url)
        .then((response) => response.json())
        .then((data) => {
            // Process the JSON data here
            result123 = data;
            console.log(result123, 'đây còn j');
            renderCity(result123)

        })
        .catch((error) => {
            // Handle any errors that may occur during the fetch request
            console.error(error);
        });
    // console.log('arr', result123)

    function renderCity(data) {
        // console.log(data, 'data123')
        // for (const x of data) {
        //     citis.options[citis.options.length] = new Option(x.Name, x.Id);
        // }
        console.log('hehe')
        citis.onchange = function() {
            district.length = 1;
            ward.length = 1;
            if (this.value != "") {
                const result = data.filter(n => n.Id === this.value);

                for (const k of result[0].Districts) {
                    district.options[district.options.length] = new Option(k.Name, k.Id);
                }
            }
        };
        district.onchange = function() {
            ward.length = 1;
            const dataCity = data.filter((n) => n.Id === citis.value);
            if (this.value != "") {
                const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                for (const w of dataWards) {
                    wards.options[wards.options.length] = new Option(w.Name, w.Id);
                }
            }
        };
    }
</script>