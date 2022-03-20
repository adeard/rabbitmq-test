from locust import HttpUser, task

class RunUser(HttpUser):
    @task
    def run_user(self):
        self.client.get("/send-task")