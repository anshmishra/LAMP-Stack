FROM python:latest
COPY . /web
WORKDIR /web
RUN pip install - requirements.txt
EXPOSE 5001
ENTRYPOINT ["python"]
CMD ["web.py"]