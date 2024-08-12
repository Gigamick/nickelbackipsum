@extends('layouts.app')

@section('content')
    <div class="container min-vh-100">
        @include('hero')

        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 d-flex align-items-center justify-content-center justify-content-center">
                <form id="ipsumForm" method="" action="" class="plausible-event-name=Ipsum+Created">
                    @csrf
                    <div class="d-md-flex flex-row align-items-center text-center text-md-start">
                        <div class="input-group">
                            <span style="border-radius: 0px;" class="input-group-text" id="basic-addon1">Give me</span>
                            <input style="border-radius: 0px;" name="count" type="number" class="form-control" placeholder="Eg. 3" aria-label="Count" aria-describedby="basic-addon1">
                        </div>
                        <div class="d-flex justify-content-center mt-2 mt-md-0">
                            <div class="form-check d-flex align-items-center justify-content-center justify-content-md-start ms-md-3">
                                <input class="form-check-input" type="radio" name="structure" value="sentence" id="flexRadioDefault1">
                                <label class="form-check-label ms-2" for="flexRadioDefault1">
                                    Sentences
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center justify-content-center justify-content-md-start ms-3 ms-md-3">
                                <input class="form-check-input" type="radio" name="structure" value="paragraph" id="flexRadioDefault2">
                                <label class="form-check-label ms-2" for="flexRadioDefault2">
                                    Paragraphs
                                </label>
                            </div>
                        </div>
                    </div>

                    <style>
                        .submit {
                            width: 100%;
                            border: 1px solid #a5a5a5;
                            background-color: white;
                            margin-top: 10px;
                        }

                        .submit:hover {
                            width: 100%;
                            border: 1px solid #a5a5a5;
                            background-color: #f3f3f3;
                            margin-top: 10px;
                        }
                    </style>
                    <div class="input-group mb-3">
                        <button type="submit" class="submit text-dark">Go</button>
                    </div>
                </form>



                <script>
                    function copyToClipboard() {
                        const ipsumOutput = document.getElementById('ipsumOutput').innerText;
                        if (ipsumOutput.trim() !== "") {  // Ensure there's something to copy
                            navigator.clipboard.writeText(ipsumOutput).then(() => {
                                // alert('Ipsum text has been copied to clipboard!');
                                //clear #copybutton text and replace it with a success message then revert after 3 seconds
                                document.getElementById('copyButton').innerText = 'Copied!';
                                setTimeout(() => {
                                    document.getElementById('copyButton').innerText = 'Copy Text';
                                }, 3000);
                            }).catch(err => {
                                console.error('Failed to copy: ', err);
                            });
                        } else {
                            alert('No text to copy!');
                        }
                    }

                    document.getElementById('ipsumForm').addEventListener('submit', function(e) {
                        e.preventDefault();

                        let form = document.getElementById('ipsumForm');
                        let formData = new FormData(form);

                        fetch('/get-ipsum', {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': formData.get('_token')
                            },
                            body: formData
                        })
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                const contentType = response.headers.get('content-type');
                                if (!contentType || !contentType.includes('application/json')) {
                                    throw new TypeError("Response not JSON");
                                }
                                return response.json();
                            })
                            .then(data => {
                                const ipsumOutput = document.getElementById('ipsumOutput');
                                ipsumOutput.innerText = data.text;
                                ipsumOutput.style.display = 'block';

                                // Show the copy button since text has been generated
                                document.getElementById('copyButton').style.display = 'block';
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                document.getElementById('ipsumOutput').innerText = 'An error occurred: ' + error.message;
                            });
                    });

                    document.getElementById('share-to-twitter').addEventListener('click', function() {
                        // Customize the text and URL to be shared
                        var text = "Nickelback Ipsum! - This is how you remind me what my design looks like with copy. #nickelback #ipsum #loremipsum #webdev #webdesign #webdevelopment  #webdesigner #webdesigners #webdevelopers #webdevs #webdevelopment https://nickelback-ipsum.com";
                        var url = "https://nickelback-ipsum.com"; // Replace with your actual URL

                        // Construct the Twitter share URL
                        var twitterUrl = "https://twitter.com/intent/tweet?text=" + encodeURIComponent(text) + "&url=" + encodeURIComponent(url);

                        // Open the Twitter share dialog in a new window
                        window.open(twitterUrl, "_blank");
                    });

                </script>


            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-md-6 offset-md-3 d-flex flex-column justify-content-center">
                <button id="copyButton" style="display:none; border: none; background: transparent;" onclick="copyToClipboard()">Copy Text</button>
                <div id="ipsumOutput" class="border p-4 bg-white mb-5" style="margin-top: 20px; display: none;"></div>
{{--                <div id="ipsumOutput" style="margin-top: 20px;"></div>--}}
            </div>
        </div>
    </div>
@endsection