@section('title')
<title>WikiPoli | Careers</title>
@endsection
@section('style')
<style>

    /* footer {
        background: rgba(33, 60, 220, 0.1);
    } */



    .footer-list li  a {
        text-decoration: none;
        color: black;
        text-align: center;
    }

    .footer-list li{
    margin: 15px;
        
    }

    .footer-list {
        list-style: none;
        text-align: center;
        font-weight: bold;
        display: flex;
        height: 100%;
        justify-content: space-evenly;
        align-items: center;
        position: absolute;
        right: 5%;
        
    }

    .footer_brand img{
        height: 15vh;
    }

        .search {
            margin-top: 0.5em;
            width: 10em;
        }

        .link {
            text-decoration: none;
        }

        .row {
            align-self: auto;
            justify-content: center;
        }

        .cardi {
            margin: 1em;
            max-width: 100%;
        }

        .cardi a {
            text-decoration: none;
        }

        .img-fluid {
            height: 15rem;
            width: 100%;
            object-fit: cover;
        }

        .posts a {
            text-decoration: none;
        }

        font-family: 'Lato', sans-serif;
        font-style: normal;
        font-weight: bold;
        font-size: 20px;
    }
    .jobs{
        margin: 50px 0;
    }
    .jobs h2{
        font-family: 'Lato', sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 50px;
    }
    .jobs p{
        margin-top: 20px;
        margin-bottom: 50px;
        font-family: 'Lato', sans-serif;
        font-style: normal;
        font-weight: 300;
        font-size: 30px;
    }
    .apply-here{
        margin-top: 100px;
    }
    hr{
        width: 80%;
    }
    .no-display{
        display: none;
    }
    /* #footer{
        background: #6D9BF1 !important;
    } */
    .social-links h3 {
    font-size: 1rem;
    line-height: 1.5;
    }

    .join-team {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        padding: 30px;
        background-color: #1257ae;
        color: white;
      }

      .join-team h2 {
        /* font-family: 'Lato', sans-serif; */
        font-style: normal;
        font-weight: normal;
        font-size: 50px;
        line-height: 60px;
        letter-spacing: -0.05em;
      }

      .join-team p {
        margin-top: 30px;

        /* font-family: 'Lato', sans-serif; */
        font-style: normal;
        font-weight: normal;
        font-size: 28px;
        line-height: 40px;
        text-align: center;
      }

      main {
        margin-top: 20px;
        width: 100%;
      }

      .join-us {
        font-family: "Lato", sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 24px;
        margin-bottom: 30px;
      }

      .join-us p {
        line-height: 30px;
        margin-left: 40px;
        margin-bottom: 5px;
        letter-spacing: 0.5px;
      
      }

      .benefits {
        margin: 50px 0;
      }

      .benefit-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .benefit-item-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #1257ae;
        width: 125px;
        height: 125px;
        border-radius: 100%;
      }

      .benefit-item p {
        margin-top: 15px;

        font-family: "Lato", sans-serif;
        font-style: normal;
        font-weight: bold;
        font-size: 20px;
      }

      .jobs {
        margin: 50px 0;
      }

      .jobs h2 {
        font-family: "Lato", sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 50px;
      }

      .jobs p {
        margin-top: 20px;
        margin-bottom: 50px;
        font-family: "Lato", sans-serif;
        font-style: normal;
        font-weight: 300;
        font-size: 30px;
      }

      .apply-here {
        margin-top: 100px;
      }

      hr {
        width: 80%;
      }

      .no-display {
        display: none;
      }
</style>
@endsection
@extends('layouts.guest')
@section('content')

<div class="join-team w-70 mx-auto">
      <h2>Join Our Team</h2>

      <p>
        We are looking for talents to help build our platform and <br />
        improve the electoral system in Nigeria
      </p>
    </div>

    <main>
      <div class="container d-flex flex-column align-items-center">
        <div class="join-us row">
          <p>
            With our mission at WikiPoli to gather information on the political
            system in Nigeria, you can join us in

            <br />

            making this happen. At WikiPoli, we recruit talented people and give
            them the space, resources and

            <br />

            support to do the best work of their lives. We hire the most capable
            people, treat them with genuine

            <br />

            respect and give them the means to succeed.
          </p>
        </div>

        <hr />

        <div class="benefits row">
          <div class="benefit-item col-md-4 mb-5 col-sm-6 col-xs">
            <div class="benefit-item-icon">
              <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1573031560/social%20images%20and%20images/images/l1v83gp5rqukqnkblybs.png" alt="salary" />
            </div>

            <p>Good Salary</p>
          </div>

          <div class="benefit-item col-md-4 mb-5 col-sm-6 col-xs">
            <div class="benefit-item-icon">
              <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1573031557/social%20images%20and%20images/images/b1cgip0lyocoucgrjxba.png" alt="food" />
            </div>

            <p>Free Lunch</p>
          </div>

          <div class="benefit-item col-md-4 mb-5 col-sm-6 col-xs">
            <div class="benefit-item-icon">
              <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1573031560/social%20images%20and%20images/images/lkmqncg61w3nzll46kpu.png" alt="learning" />
            </div>

            <p>Learning and Development</p>
          </div>

          <div class="benefit-item col-md-4 mb-5 col-sm-6 col-xs">
            <div class="benefit-item-icon">
              <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1573031557/social%20images%20and%20images/images/gfbw4g3ll1uobqtbvglo.png" alt="health" />
            </div>

            <p>Health Insurance</p>
          </div>

          <div class="benefit-item col-md-4 mb-5 col-sm-6 col-xs">
            <div class="benefit-item-icon">
              <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1573031556/social%20images%20and%20images/images/yjol9licmwxvdbgkii3v.png" alt="car" />
            </div>

            <p>Car Loan</p>
          </div>

          <div class="benefit-item col-md-4 mb-5 col-sm-6 col-xs">
            <div class="benefit-item-icon">
              <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1573031559/social%20images%20and%20images/images/oi8rwnrilw4wo2w5wnev.png" alt="colleagues" />
            </div>

            <p>Work with amazing people</p>
          </div>
        </div>

        <hr />

        <div class="workspace-images row justify-content-between w-100">
          <img
            class="col-md-4 p-5 mb-5 col-sm-6 col-xs"
            src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1573030975/social%20images%20and%20images/lumylslqhrurvuhyrng1.png"
            alt="workspace"
          />

          <img
            class="col-md-4 p-5 mb-5 col-sm-6 col-xs"
            src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1573030974/social%20images%20and%20images/s9g9mr1xng106mrpgenk.png"
            alt="workspace2"
          />

          <img
            class="col-md-4 p-5 mb-5 col-sm-6 col-xs"
            src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1573030975/social%20images%20and%20images/uu6tislgemctxezuwztq.png"
            alt="workspace3"
          />
        </div>

        <hr />

        <div class="jobs d-flex flex-column align-items-center">
          <h2>Available Jobs</h2>

          <p class="">Sorry, we don't have any open positions at this moment</p>

          <div class="form-style no-display">
            <form
              class="check d-flex flex-column align-items-center"
              action="#"
              method="post"
            >
              <h3>Apply Here</h3>

              <ul class="form-style">
                <li>
                  <label>Full Name <span class="required">*</span></label
                  ><input
                    type="text"
                    name="field1"
                    class="field-divided"
                    placeholder="First"
                  />
                  <input
                    type="text"
                    name="field2"
                    class="field-divided"
                    placeholder="Last"
                  />
                </li>

                <li>
                  <label>Email Address<span class="required">*</span></label>

                  <input type="email" name="field3" class="field-long" />
                </li>

                <li>
                  <label>Phone Number<span class="required">*</span></label>

                  <input type="tel" name="field4" class="field-long" />
                </li>

                <li>
                  <label for="cv">
                    <strong>Your CV</strong> <br />
                    (.pdf .doc .docx .rtf | Max.: 10Mb)
                  </label>

                  <input
                    name="field5"
                    type="file"
                    accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/rtf"
                  />
                </li>

                <li>
                  <label
                    >Cover Letter/ Portfolio link?
                    <span class="required">*</span></label
                  >

                  <textarea
                    name="field6"
                    id="field6"
                    class="field-long field-textarea"
                  ></textarea>
                </li>

                <li>
                  <input type="checkbox" required />

                  <span>
                    I have read the
                    <a href="privacypolicy.html" target="_blank"
                      >privacy policy</a
                    >

                    and hereby I give my consent to Wikipoli <br />
                    to process and handle my personal data given in the
                    application form <br />
                    and in my CV for the purpose of preparing the recruitment
                    process and/or future hiring process.
                  </span>
                </li>

                <li>
                  <input type="submit" value="APPLY" />
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </main>

@section('footer')
    @include('layouts.footer')
@endsection
@endsection