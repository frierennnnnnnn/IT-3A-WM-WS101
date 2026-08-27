<!DOCTYPE html>
<html>

<head>
    <title>Dynamic Resume Generator</title>
</head>

<body>

<table border="1"  width="650" align="center">

    <tr bgcolor="#174A7C">

        <td align="center">

            <h1>
                <font color="white">
                    Dynamic Resume Generator
                </font>
            </h1>

        </td>

    </tr>


    <tr>

        <td bgcolor="#F8F9FA">

            <form method="GET" action="resume.php">

                <table width="100%" cellpadding="8">

                    <tr>
                        <th colspan="2">
                            General Information
                        </th>
                    </tr>


                    <tr>

                        <td>Full Name</td>

                        <td>
                            <input type="text"
                                   name="fullname"
                                   required>
                        </td>

                    </tr>


                    <tr>

                        <td>Email</td>

                        <td>
                            <input type="email"
                                   name="email"
                                   required>
                        </td>

                    </tr>


                    <tr>

                        <td>Address</td>

                        <td>
                            <input type="text"
                                   name="address"
                                   required>
                        </td>

                    </tr>


                    <tr>

                        <td>Phone Number</td>

                        <td>
                            <input type="text"
                                   name="phone"
                                   required>
                        </td>

                    </tr>


                    <tr>

                        <td>Program</td>

                        <td>

                            <select name="program" required>

                                <option value="">
                                    Select Program
                                </option>

                                <option value="BS Information Technology">
                                    BS Information Technology
                                </option>

                                <option value="BS Computer Science">
                                    BS Computer Science
                                </option>

                            </select>

                        </td>

                    </tr>


                    <tr>

                        <td valign="top">
                            Career Objective
                        </td>

                        <td>

                            <textarea
                                name="objective"
                                rows="6"
                                cols="40"
                                placeholder="Enter your career objective..."
                                required
                            ></textarea>

                        </td>

                    </tr>


                    <tr>

                        <td colspan="2" align="center">

                            <input type="submit"
                                   value="Generate Resume">

                        </td>

                    </tr>

                </table>

            </form>

        </td>

    </tr>

</table>

</body>
</html>