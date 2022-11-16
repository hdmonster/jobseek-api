
# JobSeek API

This API service is provided for JobSeek mobile app developed by the dev (weedz)




## API Usage

**User**

Authentication

Page            | URL                 | 
-------------   | -------------       |
Log In          | /api/login          | 
Sign Up         | /api/register       |

Job Seeker Specialization --> Apply Job

Page                              | URL                           | Id
-------------                     | -------------                 | -------------  
Job Seeker Specialization         | /api/specializations          | N/A 
Job Seeker Choose Job             | /api/jobs/{id}                | Specialization Id
Available Job for Job Seeker      | /api/job-vacancies/{id}       | Job Id
Job Information                   | /api/job-vacancies/detail/{id}| Job Vacancies Id

Home Job Seeker --> Job Seeker Profile 2

Page                    | URL                       | Id
-------------           | -------------             | -------------  
Home Job Seeker         | /api/job-vacancies/{id}   | Job Id 
Search Job Seeker       | /api/specializations      | N/A
Job Seeker Profile 2    | /api/profile/{id}         | User Id

---


**Company**

Company Specialization --> Company Profile 1

Page                    | URL                               | Id
-------------           | -------------                     | -------------  
Company Specialization  | /api/specializations              | N/A 
Home Company            | /api/profile/specialization/{id}  | Specialization Id
Search Company          | /api/specializations              | N/A
Company Profile 1       | /api/companies/{id}               | Company Id
