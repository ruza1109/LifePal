export class CustomError {

    constructor(statusCode)  {
        this.statusCode = statusCode;
    }

    getMessage()
    {
        switch (this.statusCode)
        {
            case 500:
                this.message = "Server error."
                break;
            case 401:
                this.message = "Your credentials does not match any record in our database. Try another credentials."
                break;
        }

        return this.message;
    }
}
